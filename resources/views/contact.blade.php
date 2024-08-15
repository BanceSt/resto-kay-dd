@extends("layouts.main")
@section("title", "contact")
@section("center")

 <div class="w-1/2 h-screen mx-auto ">
    {{-- title --}}
    <div class="flex justify-center w-full h-20 text-6xl item-center bg-slate-200">
        Contactez-nous
    </div>

    {{-- formulaire --}}
    <form action="{{route("contact.add")}}" method="post">
    @csrf <!-- {{ csrf_field() }} -->
    <div class="grid w-full grid-cols-3 gap-3 px-1 pt-1">
        <div>
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Prénom </label>
            <input type="text" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="John" @disabled(auth()->check()) value='{{auth()->check() ? auth()->user()->name : ""}}' required />
        </div>
        <div>
            <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Nom </label>
            <input type="text" name="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Doe" @disabled(auth()->check()) value='{{auth()->check() ? auth()->user()->last_name : ""}}' required />
        </div>
        <div class="">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Email </label>
            <input type="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="john.doe@company.com" @disabled(auth()->check()) value='{{auth()->check() ? auth()->user()->email : ""}}' required />
        </div>


        <div class="col-span-3 pt-2">
            <label for="objet" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Objet :  </label>
            <input type="text" name="objet" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="..." required />
        </div>

        <div class="col-span-3 pt-2">
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Votre message</label>
            <textarea name="message" rows="10" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Write your thoughts here...">
            </textarea>
        </div>

        <div class="flex justify-end w-full col-span-3 pt-2">
            <button type="submit" class="focus:outline-none text-white bg-green-400 hover:bg-green-500 focus:ring-4 focus:ring-green-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">
                Envoyer
            </button>
        </div>
    </div>
    </form>
 </div>
@endsection
