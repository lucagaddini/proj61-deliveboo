<?php

use Illuminate\Database\Seeder;
use App\Order;
//use App\Item;
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

        $max = 6;

        for($i = 0; $i < $max ; $i++){
            $new_order = new Order();
            $new_order->name = $faker->firstNameMale();
            $new_order->surname = $faker->lastName();
            $new_order->email = $faker->email();
            $new_order->address = $faker->address();
            $new_order->telephone_number = $faker->e164PhoneNumber();
            $new_order->total = $faker->numberBetween(8, 104);
            $new_order->save();

            // $item_id = Item::inOrder()->first()->id;
            // $item_id = Item::orderBy('id', 'asc')->first();
            // $item_id = Item::orderByDesc('id')->get();
            //if($i >= 0 && $i < 10){
                $item_id = $faker->randomElements(['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13'], 4);

            //}
            $new_order -> items() -> attach($item_id, array("quantity" =>  4));
        }

        for($i = 0; $i < $max ; $i++){
            $new_order = new Order();
            $new_order->name = $faker->firstNameMale();
            $new_order->surname = $faker->lastName();
            $new_order->email = $faker->email();
            $new_order->address = $faker->address();
            $new_order->telephone_number = $faker->e164PhoneNumber();
            $new_order->total = $faker->numberBetween(8, 104);
            $new_order->save();

            $item_id = $faker->randomElements(['14', '15', '16', '17', '18', '19', '20'], 4);

            $new_order -> items() -> attach($item_id, array("quantity" =>  4));
        }

        for($i = 0; $i < $max ; $i++){
            $new_order = new Order();
            $new_order->name = $faker->firstNameMale();
            $new_order->surname = $faker->lastName();
            $new_order->email = $faker->email();
            $new_order->address = $faker->address();
            $new_order->telephone_number = $faker->e164PhoneNumber();
            $new_order->total = $faker->numberBetween(8, 104);
            $new_order->save();

            $item_id = $faker->randomElements([21, 22, 23, 24, 25, 26, 27, 28 ,29], 4);

            $new_order -> items() -> attach($item_id, array("quantity" =>  4));
        }

        for($i = 0; $i < $max ; $i++){
            $new_order = new Order();
            $new_order->name = $faker->firstNameMale();
            $new_order->surname = $faker->lastName();
            $new_order->email = $faker->email();
            $new_order->address = $faker->address();
            $new_order->telephone_number = $faker->e164PhoneNumber();
            $new_order->total = $faker->numberBetween(8, 104);
            $new_order->save();

            $item_id = $faker->randomElements([30, 31, 32, 33, 34, 35, 36], 4);

            $new_order -> items() -> attach($item_id, array("quantity" =>  4));
        }

        for($i = 0; $i < $max ; $i++){
            $new_order = new Order();
            $new_order->name = $faker->firstNameMale();
            $new_order->surname = $faker->lastName();
            $new_order->email = $faker->email();
            $new_order->address = $faker->address();
            $new_order->telephone_number = $faker->e164PhoneNumber();
            $new_order->total = $faker->numberBetween(8, 104);
            $new_order->save();

            $item_id = $faker->randomElements([33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46], 4);

            $new_order -> items() -> attach($item_id, array("quantity" =>  4));
        }

    }
}
