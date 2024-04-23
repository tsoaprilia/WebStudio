<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index_user(Request $request)
{
    $search = $request->input('search');

    $query = User::query();

    if ($search) {
        $query->where(function ($q) use ($search) {
            $q->where('name', 'like', '%' . $search . '%')
                ->orWhere('email', 'like', '%' . $search . '%');
            // Tambahkan atribut lainnya yang ingin Anda cari di sini
        });
    }

    $users = $query->get();

    // Check if the result is empty and if there is a search query
    if ($users->isEmpty() && $search) {
        // If no match is found, return all users
        $users = User::all();
    }

    return view('index_user', compact('users'));
}



    public function show_user(User $user)
    {
        return view('show_user', compact('user'));
    }

    public function edit_user(User $user)
    {
        return view('edit_user', compact('user'));
    }

    public function update_user(User $user, Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $user->update([
            'name' => $request->name,
            'password' => Hash::make($request->password),
        ]);

        return Redirect::route('index_user');
    }

    public function delete_user(User $user)
    {
        $user->delete();
        return Redirect::route('index_user');
    }
}
