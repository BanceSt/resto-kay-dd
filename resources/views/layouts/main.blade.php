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
            <a href="" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-bold text-gray-100 whitespace-nowrap dark:text-white">{{str_replace("_", " ", config("app.name"))}}</span>
            </a>
            <button onclick="window.location='{{route('reservation')}}'" class="text-white bg-green-700 text-2xl hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full px-5 py-1.5 text-center me-2 mb-2">
                RESERVATION
            </button>
        </div>
    </nav>
    @yield("center")
    @livewireScripts
</body>
</html>
