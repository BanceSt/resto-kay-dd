@extends("layouts.main")


@section("center")

 {{-- Bannière --}}


<div id="default-carousel" class="relative w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">



         <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{asset('/images/salade-chevre-chaud-1200.jpg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 bg-center top-1/2 left-1/2" alt="...">
        </div>

        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{asset('/images/salade-chevre-chaud-1200.jpg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 bg-center top-1/2 left-1/2" alt="...">
        </div>

        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{asset('/images/salade-chevre-chaud-1200.jpg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 bg-center top-1/2 left-1/2" alt="...">
        </div>

        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{asset('/images/salade-chevre-chaud-1200.jpg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 bg-center top-1/2 left-1/2" alt="...">
        </div>

        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{asset('/images/salade-chevre-chaud-1200.jpg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>

        {{-- titre carrousel --}}
        <div class="absolute z-50 block w-full text-6xl text-center -translate-y-1/2 text-gray-700/70 top-1/2">
            Plat du jour
        </div>

    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2 rtl:space-x-reverse">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer start-0 group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gray-800/30 group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer end-0 group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gray-800/30 group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>

<hr class="w-8/12 h-1 mx-auto my-2 bg-gray-600 border-0 rounded md:my-10 dark:bg-gray-700">

<div class="flex flex-row w-full h-96 ">
    {{-- photo-place --}}
    <div class="relative flex w-1/3 ">
            <img src="{{asset('/images/salade-chevre-chaud-1200.jpg')}}"
            class="absolute block h-full pl-10" alt="...">
    </div>
    <div class="w-2/3 h-full">
        <div class="w-11/12 h-full mx-auto">
            <div class="flex items-center justify-center w-full text-5xl font-bold text-gray-800 underline h-1/6">
                Chez Dédé
            </div>

            <div class="w-full pt-10 text-2xl text-center h-5/6">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, saepe.
                Aliquid magni est nobis pariatur illum quis quasi, optio nam!
                Eveniet magnam minima ullam dolore, rerum rem fuga voluptatem beatae.
                Doloribus eum ad eaque aliquid omnis quibusdam illo a quos.
                Accusantium laboriosam autem incidunt distinctio quod repellendus laudantium maxime amet!
                rerum rem fuga voluptatem beatae.
                Doloribus eum ad eaque aliquid omnis quibusdam illo a quos.
                Accusantium laboriosam autem incidunt distinctio quod repellendus laudantium maxime amet!
            </div>
        </div>
    </div>
</div>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15433.575454242073!2d-61.03112481284175!3d14.74682640000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c6aa3fe563d7fa1%3A0x263db506deae2103!2sH%20Food%20Morne%20des%20Esses!5e0!3m2!1sfr!2sfr!4v1723699460755!5m2!1sfr!2sfr"
style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-full pt-5 h-80">
</iframe>

@endsection

