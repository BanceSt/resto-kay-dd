<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    @livewireStyles
    <script src="https://kit.fontawesome.com/89eaa3121d.js" crossorigin="anonymous"></script>
    <title>@yield("title", "Acceuil")</title>
</head>
<body>
    <nav class="bg-gray-700 border-gray-200">
        <div class="flex flex-wrap items-center justify-between w-full p-4">
            <a href="{{route('home')}}" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-bold text-gray-100 whitespace-nowrap">{{str_replace("_", " ", config("app.name"))}}</span>
            </a>
            <div>
            <button onclick="window.location='{{route('reservation')}}'" class="text-white bg-green-700 text-2xl hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-lg px-5 py-1.5 text-center me-2 mb-2">
                RESERVATION
            </button>
            @auth
            <form action="{{route('logout')}}" method="POST" class="inline-flex">
            @csrf <!-- {{ csrf_field() }} -->
            <button type="submit" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-2xl py-1.5 px-5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                Deconnexion
            </button>
            </form>
            @else
            <button onclick="window.location='{{route('register')}}'" type="button" class=" text-2xl py-1.5 px-5 me-2 mb-2 font-medium text-gray-50 focus:outline-none  rounded-lg border  focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 bg-gray-800  border-gray-600 hover:text-white hover:bg-gray-700">
                Inscription
            </button>
            <button onclick="window.location='{{route('login')}}'" type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-2xl py-1.5 px-5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                Connexion
            </button>
            @endauth
            </div>
        </div>
    </nav>
    <div class="w-full h-screen min-h-screen">


    @yield("center")
    </div>
    @livewireScripts
</body>
</html>
