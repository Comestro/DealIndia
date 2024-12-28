{{-- <!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <title>@yield('title') | Real India</title>

    <style>
        .roboto-medium {
            font-family: "Roboto", sans-serif;
            font-weight: 500;
            font-style: normal;
        }

        body {
            font-family: "Roboto", sans-serif;
        }
    </style>
</head>

<body>
    <nav class="bg-blue-900 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#" class="text-2xl font-bold">
                <img src="logo.png" width="15%"  alt="">
            </a>
            <ul class="flex space-x-4">
                <li><a href="#services" class="hover:underline">Services</a></li>
                <li><a href="#about" class="hover:underline">About</a></li>
                <li><a href="#contact" class="hover:underline">Contact</a></li>
               

            </ul>
        </div>
    </nav>
    <div class="min-h-screen flex bg-gray-100">
        <div class="flex-1 flex flex-col">
            

            <!-- Dashboard Content -->

            <div class="">
                @yield('content')
            @show
        </div>
      @include('user.include.footer')

    </div>
</div>

</body>

</html> --}}


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <title>@yield('title') | Real India</title>

    <style>
        .roboto-medium {
            font-family: "Roboto", sans-serif;
            font-weight: 500;
            font-style: normal;
        }

        body {
            font-family: "Roboto", sans-serif;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="bg-blue-900 text-white fixed top-0 left-0 w-full z-40 p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#" class="text-2xl font-bold">
                <img src="logo.png" width="15%" alt="">
            </a>
            <button id="menuButton" class="text-2xl lg:hidden">
                <i class="bi bi-list"></i>
            </button>
        </div>
       
    </nav>

    <div class="flex h-screen bg-gray-100 pt-16">
        <!-- Sidebar -->
        <aside id="sidebar" class="fixed top-16 left-0 z-30 w-64 bg-gray-300 h-full transform lg:translate-x-0 -translate-x-full transition-transform ">
            <nav class="flex-1 p-4 space-y-2 mt-4">
                <ul class="space-y-2">
                    <li>
                        <a href="#profile" class="flex items-center p-2 text-white rounded-lg bg-blue-800 hover:bg-blue-600">
                            <i class="bi bi-hdd-stack-fill px-4"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#profile" class="flex items-center p-2 text-white rounded-lg bg-blue-800 hover:bg-blue-600">
                            <i class="bi bi-person-bounding-box px-4"></i> Profile
                        </a>
                    </li>
                    
                    <li>
                        <a href="#profile" class="flex items-center p-2 text-white rounded-lg bg-blue-800 hover:bg-blue-600">
                            <i class="bi bi-person-circle px-4"></i> About
                        </a>
                    </li>
                    <li>
                        <a href="#profile" class="flex items-center p-2 text-white rounded-lg bg-blue-800 hover:bg-blue-600">
                            <i class="bi bi-person-lines-fill px-4"></i> Contact
                        </a>
                    </li>
                    <li>
                        <a href="#settings" class="flex items-center p-2 text-white rounded-lg bg-blue-800 hover:bg-blue-600">
                            <i class="bi bi-gear-fill px-4"></i> Settings
                        </a>
                    </li>
                    <li>
                        <a href="#tasks" class="flex items-center p-2 text-white rounded-lg bg-blue-800 hover:bg-blue-600">
                            <i class="bi bi-list-task px-4"></i> Tasks
                        </a>
                    </li>
                </ul>
                <form method="POST" action="/logout" class="mt-4">
                    @csrf
                    <button type="submit" class="w-full bg-blue-800 hover:bg-blue-700 text-white py-2 px-4 rounded-lg text-left">
                        <i class="bi bi-arrow-bar-right text-lg px-2"></i>
                        Logout
                    </button>
                </form>
            </nav>
        </aside>

        <!-- Overlay -->
        <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 hidden z-20 lg:hidden"></div>

        <!-- Main Content -->
        <div class="flex-1 lg:pl-64">
            <main class="p-4">
                @yield('content')
            </main>
            @include('user.include.footer')
        </div>
        
    </div>
    
    <script>
        const menuButton = document.getElementById('menuButton');
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('overlay');

        menuButton.addEventListener('click', () => {
            sidebar.classList.toggle('-translate-x-full');
            overlay.classList.toggle('hidden');
        });

        overlay.addEventListener('click', () => {
            sidebar.classList.add('-translate-x-full');
            overlay.classList.add('hidden');
        });
    </script>
</body>

</html>

