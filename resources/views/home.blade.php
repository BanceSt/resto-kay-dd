<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Acceuil</title>
</head>
<body>
<nav class="bg-green-400 border-gray-200">
    <div class="w-full flex flex-wrap items-center justify-between p-4">
        <a href="" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white font-bold">{{str_replace("_", " ", config("app.name"))}}</span>
        </a>
    </div>
</nav>
</body>
</html>
