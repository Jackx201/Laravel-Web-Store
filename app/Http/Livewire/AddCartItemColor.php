<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddCartItemColor extends Component
{
    public $qty = 1;
    public $quantity = 0;
    public $color_id = ""; 
    public $product, $colors;
    public function mount(){
        $this->colors = $this->product->colors;
    }

    public function increment(){
        $this->qty++;
    }

    public function decrement(){
        $this->qty--;
    }

    public function render()
    {
        return view('livewire.add-cart-item-color');
    }

    public function updatedColorId($value){
        $this->quantity = $this->product->colors->find($value)->pivot->quantity;
    }
}
