<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Brand;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categories =[

           [ 'name' => 'Cell phones and tables',
            'slug' => Str::slug('Cell phones and tables'),
            'icon' =>'<i class="fa-solid fa-mobile-screen-button"></i>'
            ],
            [ 'name' => 'TV, audio and video',
            'slug' => Str::slug('TV, audio and video'),
            'icon' =>'<i class="fa-solid fa-tv"></i>'
            ],
            [ 'name' => 'Console and video games',
            'slug' => Str::slug('Console and video games'),
            'icon' => '<i class="fa-regular fa-gamepad-modern"></i>'
            ],
            [ 'name' => 'Computing',
            'slug' => Str::slug('Computing'),
            'icon' =>'<i class="fa-regular fa-laptop"></i>'
            ],
            [ 'name' => 'Fashion',
            'slug' => Str::slug('Fashion'),
            'icon' =>'<i class="fa-regular fa-shirt"></i>'
            ],
    
    ];
    foreach($categories as $category){
        $category = Category::factory(1)->create($category)->first();

        $brands = Brand::factory(4)->create();
    

        foreach($brands as $brand){
            $brand->categories()->attach($category->id);

        }
    }
    }
}
