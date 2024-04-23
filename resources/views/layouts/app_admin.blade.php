<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        <title>Laravel</title>

        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

         <!-- Tautan ke Bootstrap CSS -->
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

         <!-- Tautan ke Bootstrap JavaScript (Popper.js dan jQuery juga diperlukan) -->
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
         <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

        <style>
            html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                margin-bottom: 0;
            }
             .footer {
                background-color: #f2f2f2;
                padding: 20px;
                text-align: center;
                position: relative;
                bottom: 0;
                width: 100%;
            }
            .fixed-nav {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                z-index: 1000;
            }

            .nav-item, .nav-link {
                background-color: transparent !important;
            }

            .navbar-nav .nav-item a {
                color: #6b7280;
                font-weight: normal;
                transition: color 0.3s, font-weight 0.3s;
            }

            .navbar-nav .nav-item a:hover {
                color: #000;
                font-weight: bold;
            }

            .navbar-nav .nav-item.active a {
                color: #000;
                font-weight: bold;
                background-color: transparent;
            }
        </style>

    </head>
    <body class="antialiased">
        <nav class="navbar navbar-expand-lg fixed-nav" style="position: fixed; background-color: #FAFAFE; width: 100%; z-index: 100; top: 0;">
            <div class="container">
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav">
                        @if (Route::has('login'))
                            @auth
                                <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                                </li>
                                @if(Auth::user()->is_admin)
                                    <!-- Dropdown for Admin with "Dashboard" and "Admin Menu" -->
                                    <li class="nav-item {{ Request::is('admin/dashboard') ? 'active' : '' }}">
                                        <a class="nav-link" href="{{ url('/admin/dashboard') }}">Role</a>
                                    </li>
                                @else
                                    <!-- Menu "Products" for Non-Admin Users -->
                                    <li class="nav-item {{ Request::is('product*') ? 'active' : '' }}">
                                        <a class="nav-link" href="{{ url('/product') }}">Products<span class="sr-only">(current)</span></a>
                                    </li>
                                @endif

                        @else
                                <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                                </li>
                                <li class="nav-item {{ Request::is('nyoba') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ url('/nyoba') }}">Products</a>
                                </li>
                            @endauth
                        @endif
                    </ul>
                    <img src="{{ asset('images/logo.png')}}" alt="Logo image" style="margin:auto; object-fit: cover; object-position: center;">
                </div>
                <div class="flex space-x-4 ml-auto">
                    @if (Route::has('login'))
                        <div class="flex space-x-4">
                            @auth
                                @if(!Auth::user()->is_admin)
                                    <a href="{{ url('/cart') }}" class="text-sm">
                                        <img src="{{ asset('images/cart.png')}}" alt="Login image" style="object-fit: cover; object-position: left; margin-top:5px; width:15px;">
                                    </a>
                                @endif
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" data-toggle="modal" data-target="#exampleModal">
                                    <img src="{{ asset('images/logout.png')}}" alt="Login image" style="object-fit: cover; object-position: left; margin-top:5px; margin-left:15px; width:15px;">
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                <a>
                                    <img src="{{ asset('images/profile.png')}}" alt="Login image" style=" margin-top:5px; margin-left:15px; width:15px;">
                                </a>
                                <ul style=" margin-top:-4px;" class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('show_profile') }}">{{ Auth::user()->name }}</a>
                                    </li>
                                </ul>
                            @else
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="text-sm" style="margin-right:20px">Register</a>
                                @endif
                                <button class="btn btn-dark text-white" style="border-radius: 32px; font-size: 12px; height: 26px; line-height: 1;" onclick="window.location='{{ route('login') }}'">Log in</button>
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
        </nav>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"><b>April'Studio</b></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  Anda telah berhasil keluar
                </div>
              </div>
            </div>
        </div>


        <main class="py-4">
            @yield('content')
        </main>


        <footer >
            <div class="footer d-flex justify-content-between align-items-center text-white p-4" style="background-color: #12938B; margin-top:64px;">
                <div style="margin-left:70px;">
                    © 2023 April'Studio | <a class="text-white" href="https://yourwebsite.com/">Aprilia Dwi Cristyana</a>
                </div>
                <div class="text-center" style="margin-right:70px;">
                    <a href="https://www.linkedin.com/in/aprilia-dwi-cristyana-883056217/" role="button" class="text-white mx-2">
                        <i class="fa fa-linkedin"></i>
                    </a>
                    <a href="https://instagram.com/apriliatso_?igshid=OGQ5ZDc2ODk2ZA==" role="button" class="text-white mx-2">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a href="https://github.com/tsoaprilia" role="button" class="text-white mx-2">
                        <i class="fa fa-github"></i>
                    </a>
                    <a href="tsoaprilia@gmail.com" role="button" class="text-white mx-2">
                        <i class="fa fa-envelope"></i>
                    </a>
                </div>
            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </body>
</html>
