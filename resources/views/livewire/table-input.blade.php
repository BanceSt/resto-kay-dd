<div class="grid grid-cols-2 gap-6 mb-6 pb-2">
    @for ($i = 0; $i < $n_tables; $i++)
       <div class="ps-1 flex flex-row">
        <div class="max-w-sm">
            <label for="number-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Une table pour :</label>
            <div class="flex flex-row">
                <input min="1" max="10" name="table{{$i}}" type="number" id="number-input" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-64 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />

                @if (($n_tables < $limit) && (($i + 1) === $n_tables))
                <button type="button" wire:click='add_table' class="ms-2 flex items-align focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 text-xl rounded-lg p-3.5 h-11 w-11">
                    <i class="fa-solid fa-plus"></i>
                </button>
                @else
                <button type="button" wire:click='sup_table' class="ms-2 flex items-align focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 text-xl rounded-lg p-3.5 h-11 w-11">
                    <i class="fa-solid fa-xmark"></i>
                </button>
                @endif

            </div>

        </div>



       </div>
    @endfor
</div>
