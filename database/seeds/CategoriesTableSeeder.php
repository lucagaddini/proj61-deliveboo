<?php

use Illuminate\Database\Seeder;
use App\Category;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Cinese',
            'Indiano',
            'Francese',
            'Messicano',
            'Pizza',
            'Sushi',
            'Burger',
            'Vegetariano',
            'Gluten Free',
        ];

        foreach ($categories as $category) {
            $new_category = new Category();
            $new_category->name = $category;
            $new_category->save();
        }

    }
}
