@extends("layouts.main")

@section("title", "Réservation")
@section("center")
<div class="flex items-center w-6/12 h-screen min-h-screen mx-auto bg-green-100">
    <div class="w-full mx-5 h-5/6">
        <div class="w-full py-3 text-4xl font-bold tracking-widest text-center bg-green-200">
            RESERVATION   #000
        </div>

        <form action="{{route('reservation.add')}}" method="POST">
        @csrf <!-- {{ csrf_field() }} -->
        <div class="pb-2 bg-green-300">
        <div class="grid grid-cols-2 gap-6 pb-2 mb-6">
            <div class="ps-1">
                <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900"> Prénom : </label>
                <input type="text" name="first_name" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="John" required @disabled(auth()->check()) value='{{auth()->check() ? auth()->user()->name : ""}}'/>
            </div>
            <div class="pe-1">
                <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900"> Nom : </label>
                <input type="text" name="last_name" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="Doe" required @disabled(auth()->check()) value='{{auth()->check() ? auth()->user()->last_name : ""}}'/>
            </div>

            {{-- email telephone --}}
            <div class="ps-1">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email address</label>
                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="john.doe@company.com" required @disabled(auth()->check()) value='{{auth()->check() ? auth()->user()->email : ""}}'/>
            </div>
            <div class="pe-1">
                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">Phone number</label>
                <input type="text" name="phone" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="123-45-678" required @disabled(auth()->check()) value='{{auth()->check() ? auth()->user()->phone : ""}}'/>
            </div>

            {{-- date réservation --}}

            <div class="ps-1">
                <label for="date" class="block mb-2 text-sm font-medium text-gray-900"> Date : </label>
                <div class="relative max-w-sm">
                    <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                    <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                        </svg>
                    </div>
                    <input name="date" id="datepicker-autohide" datepicker datepicker-format="dd-mm-yyyy" datepicker-autohide type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 " placeholder="Select date">
                </div>
            </div>

            <div class="pe-1">
                <label for="time" class="block mb-2 text-sm font-medium text-gray-900">Select time:</label>
                <div class="relative">
                    <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <input name="time" type="time" id="time" class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" min="09:00" max="18:00" value="00:00" required />
                </div>
            </div>



        </div>

        @livewire('table-input')

        <div class="px-1">
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Besoin spéciaux : </label>
            <textarea name="message" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>
        </div>

        <div class="flex flex-row items-end justify-end pt-2 pe-1 flex-end">
            <button type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2"> Envoyer </button>
        </div>
    </div>
        </form>
    </div>
</div>
@endsection

