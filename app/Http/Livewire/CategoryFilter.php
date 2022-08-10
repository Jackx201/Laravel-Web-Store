<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;

class CategoryFilter extends Component
{
    use WithPagination;
    public $category, $subcategory_filter, $brand_filter;
    public $view = "grid";

    public function clean(){
        $this->reset(['subcategory_filter','brand_filter']);
    }
    public function render()
    {
        //$products = $this->category->products()->where('status',2)->paginate(8);
        $productsQuery = Product::whereHas('subcategory.category', function(Builder $query){
            $query->where('id', $this->category->id);
        });

        if($this->subcategory_filter){
            $productsQuery = $productsQuery->whereHas('subcategory', function(Builder $query){
                $query->where('name', $this->subcategory_filter);
            });
        }

        if($this->brand_filter){
            $productsQuery = $productsQuery->whereHas('brand', function(Builder $query){
                $query->where('name', $this->brand_filter);
            });
        }

        $products = $productsQuery->paginate(8);
        return view('livewire.category-filter', compact('products'));
    }
}
