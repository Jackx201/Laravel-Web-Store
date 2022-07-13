<div>
    {{-- The Master doesn't talk, he acts. --}}

    <x-jet-dropdown width="96">
        <x-slot name="trigger">
            <x-cart size="30" color='white'/>
            <span class="absolute top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 transform translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full">0</span>
        </x-slot>

        <x-slot name="content">

            <div class="py-6 px-4">
                <p class="text-center text-gray-700">
                    There are no items in the shopping cart
                </p>
            </div>
        </x-slot>

    </x-jet-dropdown>

</div>
