<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Subcategory;


class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategories = [
            [
                'category_id' => 1,
                'name' => 'Cell phones and smartphones',
                'slug' => Str::slug('Cell phones and smartphones'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 1,
                'name' => 'Cell phone accesories',
                'slug' => Str::slug('Cell phone accesories'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 1,
                'name' => 'Smartwatches',
                'slug' => Str::slug('Smartwatches'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 2,
                'name' => 'TV and Audio',
                'slug' => Str::slug('TV and audio'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 2,
                'name' => 'Audio',
                'slug' => Str::slug('Audio'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 2,
                'name' => 'Car audio',
                'slug' => Str::slug('Car audio'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 3,
                'name' => 'Xbox',
                'slug' => Str::slug('Xbox'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 3,
                'name' => 'Play Station',
                'slug' => Str::slug('Play Station'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 3,
                'name' => 'PC Games',
                'slug' => Str::slug('PC Games'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 3,
                'name' => 'Nintendo',
                'slug' => Str::slug('Nintendo'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 4,
                'name' => 'Laptop',
                'slug' => Str::slug('Laptop'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 4,
                'name' => 'PC Desktop',
                'slug' => Str::slug('PC Desktop'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 4,
                'name' => 'Storage',
                'slug' => Str::slug('Storage'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 4,
                'name' => 'Computer Accessories',
                'slug' => Str::slug('Computer Accessories'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 5,
                'name' => 'Men',
                'slug' => Str::slug('Men'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 5,
                'name' => 'Women',
                'slug' => Str::slug('Women'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 5,
                'name' => 'Watch',
                'slug' => Str::slug('Watch'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 5,
                'name' => 'Glasses',
                'slug' => Str::slug('Glasses'),
                'color' => true,
                'size' => true
            ],
        ];

        foreach($subcategories as $subcategory){
            Subcategory::factory(1)->create($subcategory);
        }
    }
}
