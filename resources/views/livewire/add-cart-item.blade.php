<div x-data>
    <p class="ext-gray-700 mb-4">
        <span class="font-semibold text-lg">Available Stock: {{ $quantity }}</span>
    </p>
    {{-- Begins:Flex --}}
    <div class="flex">
        {{-- Begins:QTY --}}
        <div>
            <x-jet-secondary-button 
            disabled
            x-bind:disabled="$wire.qty<=1"
            wire:loading.attr="disable"
            wire:target="decrement"
            wire:click="decrement">
                -
            </x-jet-secondary-button>
            <span class="mx-2 text-gray-700">{{$qty}}</span>
            <x-jet-secondary-button
            disabled
            x-bind:disabled="$wire.qty>=$wire.quantity"
            wire:loading.attr="increment"
            wire:target="increment" 
            wire:click="increment">
                +
            </x-jet-secondary-button>
        </div>
        {{-- Ends:QTY --}}

        {{-- Begins:Add to cart Button --}}
        <div class="flex-1">
            <x-button class="w-full">
                Add to cart
            </x-button>
        {{-- Ends:Add to cart Button --}}
        </div>
    </div>
    {{-- Ends:Flex --}}
</div>
