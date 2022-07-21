<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subcategory>
 */
class SubcategoryFactory extends Factory
{
    
    public function definition()
    {
        $fakerFilesName = $this->faker->image(storage_path("app/public/subcategories"), 640, 480);
        return [
            'image' => 'subcategories/'.$this->faker->imageUrl(640, 480), 
            'image' => "subcategories/".basename($fakerFilesName)
        ];
    }
}
