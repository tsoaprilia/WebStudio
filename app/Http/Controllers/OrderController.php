<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\User;
use App\Models\Order;
use App\Models\Transaction;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Mail\ViewMail;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function checkout(Request $request){
        $user_id = Auth::id();
        $carts = Cart::where('user_id', $user_id)->get();

        if($carts == null){
            return Redirect::back();
        }

        $order = Order::create([
            'user_id'=>$user_id
        ]);

        foreach($carts as $cart){

            Transaction::create([
                'product_id' =>$cart->product_id,
                'order_id' => $order->id
            ]);

            $cart->delete();
        }

        return redirect()->route('show_order', ['order' => $order])->with('success', 'Checkout successful!');


     }

     public function index_order(Request $request){
        $search = $request->input('search');
        $user = Auth::user();
        $is_admin = $user->is_admin;

        $query = Order::query();

        if (!$is_admin) {
            $query->where('user_id', $user->id);
        }

        if ($search) {
            $query->where(function ($q) use ($search, $is_admin) {
                $q->where('id', 'like', '%' . $search . '%');

                $q->orWhereHas('user', function ($userQuery) use ($search) {
                    $userQuery->where('name', 'like', '%' . $search . '%');
                });
            });
        }

        $orders = $query->get();

        // Check if the result is empty and if there is a search query
        if ($orders->isEmpty() && $search) {
            // If no match is found, return all orders
            $orders = Order::all();
        }

        return view('index_order', compact('orders', 'is_admin'));
    }





     public function show_order(Order $order){
        return view('show_order', compact('order'));
     }

     public function submit_payment_receipt(Order $order, Request $request){
        $file = $request->file('payment_receipt');
        $path = time().'-'. $order->id.'.'.$file->getClientOriginalExtension();

        if(!Storage::disk('public_uploads')->put($path, file_get_contents($file))) {
            return false;
        }

        $order->update(['payment_receipt'=>$path]);


        return Redirect::back();
     }

     public function confirm_payment(Order $order){
        $order->update([
            'is_paid'=>true
        ]);

        return Redirect::back();
     }

     public function sendEmail(Order $order)
     {
         $userEmail = $order->user->email;

         $products = $order->transactions->map(function ($transaction) {
             return $transaction->product;
         });

         // Additional logic to get product names and links
         $productNames = $products->pluck('name_product')->implode(', ');
         $productLinks = $products->pluck('link')->implode(', ');

         // Send email with product names and links to the user's email who placed the order
         Mail::to($userEmail)->send(new ViewMail($productNames, $productLinks));

         return redirect()->route('index_order')->with('success', 'Email sent successfully.');
     }


}
