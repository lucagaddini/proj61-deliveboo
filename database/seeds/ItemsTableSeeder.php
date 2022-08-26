<?php

use Illuminate\Database\Seeder;

use App\Item;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'name' => 'Pizza Margherita',
                'price' => 6.4,
                'description' => 'impasto della pizza, salsa di pomodoro, mozzarella di bufala campana DOP, olio extravergine di oliva',
                'visible' => 1,
                'vegetarian' => 1,
                'user_id' => 1,
                'course_id' => 5
            ]
        ];


        //Ciclo Array items

        foreach ($items as $item) {
            $new_item = new Item();
            $new_item->name = $item['name'];
            $new_item->price = $item['price'];
            $new_item->description = $item['description'];
            $new_item->visible = $item['visible'];
            $new_item->vegetarian = $item['vegetarian'];


            $new_item->user_id = $item['user_id'];
            $new_item->course_id = $item['course_id'];

            $new_item->save();

        }
    }
}
