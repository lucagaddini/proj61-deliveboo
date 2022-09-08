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

        $max = 80;

        for($i = 0; $i < $max ; $i++){
            $new_order = new Order();
            $new_order->name = $faker->firstNameMale();
            $new_order->surname = $faker->lastName();
            $new_order->email = $faker->email();
            $new_order->address = $faker->address();
            $new_order->telephone_number = $faker->e164PhoneNumber();
            $new_order->total = $faker->numberBetween(8, 104);
            $new_order->save();



            $item_id = Item::inRandomOrder()->first();

            if( $i >= 0 && $i < 10 ){
                $item_id = $faker->randomElements([1, 2, 3, 4, 5, 6, 7 , 8, 9, 10, 11, 12, 13], 4);
            }
            if( $i >= 11 && $i < 17 ){
                $item_id = $faker->randomElements([14, 15, 16, 17, 18, 19, 20], 4);
            }
            if( $i >= 19 && $i < 30 ){
               $item_id = $faker->randomElements([21, 22, 23, 24, 25, 26, 27, 28 ,29], 4);
            }
            if( $i >= 40 && $i < 47 ){
               $item_id = $faker->randomElements([30, 31, 32, 33, 34, 35, 36], 4);
            }
            if( $i >= 50 && $i < 58 ){
               $item_id = $faker->randomElements([37, 38, 39, 40, 41, 42, 43, 44, 45, 46], 4);
            }
            if( $i >= 59 && $i < 67){
               $item_id = $faker->randomElements([47, 48, 49, 40, 51, 52], 4);
            }
            if( $i >= 68 && $i < 75){
               $item_id = $faker->randomElements([53, 54, 55, 56, 67, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68], 4);
            }
            if( $i >= 80 && $i < 85){
               $item_id = $faker->randomElements([69, 70, 71, 72, 73, 74, 75, 76, 77,], 4);
            }
            $new_order -> items() -> attach($item_id, array("quantity" =>  1));
        }


    }
}
