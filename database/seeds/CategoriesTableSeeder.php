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
            [
                'name'=>'Cinese',
                'image_path'=>'cat_chinese.jpg',
            ],
            [
                'name'=>'Indiano',
                'image_path'=>'cat_indiano.jpg',
            ],
            [
                'name'=>'Francese',
                'image_path'=>'cat_francese.jpg',
            ],
            [
                'name'=>'Messicano',
                'image_path'=>'cat_messicano.jpg',
            ],
            [
                'name'=>'Pizza',
                'image_path'=>'cat_pizza.jpg',
            ],
            [
                'name'=>'Sushi',
                'image_path'=>'cat_sushi.jpg',
            ],
            [
                'name'=>'Burger',
                'image_path'=>'cat_burghers.jpg',
            ],
            [
                'name'=>'Vegetariano',
                'image_path'=>'cat_vegetariano.jpg',
            ],
            [
                'name'=>'Gluten Free',
                'image_path'=>'cat_no-glutine.jpg',
            ],
        ];

        foreach ($categories as $category) {
            $new_category = new Category();
            $new_category->name = $category['name'];
            $new_category->image_path = $category['image_path'];
            $new_category->save();
        }

    }
}
