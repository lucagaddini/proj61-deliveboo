<?php

use Illuminate\Database\Seeder;
use App\Order;
use App\Item;
use Illuminate\Support\Str;

use Faker\Generator as Faker;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        // protected $fillable = [
        //     'name', 'surname', 'email','address','telephone_number','total',
        // ];

        for($i = 0; $i < 150 ; $i++){
            $new_order = new Order();
            $new_order->name = $faker->firstNameMale();
            $new_order->surname = $faker->lastName();
            $new_order->email = $faker->email();
            $new_order->address = $faker->address();
            $new_order->telephone_number = $faker->e164PhoneNumber();
            $new_order->total = $faker->numberBetween(8, 104);
            $new_order->save();

            $item_id = Item::inRandomOrder()->first()->id;
            $new_order -> items() -> attach($item_id, array("quantity" =>  $faker->randomDigit()));
        }

    }
}
