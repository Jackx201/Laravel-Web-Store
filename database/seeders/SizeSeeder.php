<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
#use Illuminate\Database\Schema\Builder;
use Illuminate\Database\Query\Builder;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::whereHas('subcategory', function(Builder $query){
            $query -> where('color', true)
            ->where('size', true);
        })->get();

        $sizes = ['Size S', 'Size M', 'Size L'];

        foreach($products as $product){
            foreach($sizes as $size){
                $product->size()->create([
                    'name' => $size
                ]);
            }
        }
    }
}
