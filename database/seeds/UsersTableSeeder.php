<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

use App\User;



class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Pizzeria Gino',
                'email' => 'pizzeria.gino@gmail.com',
                'password' => Hash::make('12345678'),
                'address' => 'Via Fillungo 12, XXYY',
                'vat_number' => '123456548910',
                'slug' => Str::slug('Pizzeria Gino','-'),
                'categories' => ['5','9']
            ],
            [
                'name' => 'Hambugheria',
                'email' => 'hamburgher@gmail.com',
                'password' => Hash::make('12345678'),
                'address' => 'Via kebab 12, ABC',
                'vat_number' => '124512451245',
                'slug' => Str::slug('Hamburgheria','-'),
                'categories' => ['5']
            ],
            [
                'name' => 'Voulez vous paté',
                'email' => 'francia@gmail.com',
                'password' => Hash::make('12345678'),
                'address' => 'Via sono di parigi 12, ABC',
                'vat_number' => '88888888888',
                'slug' => Str::slug('Voulez vous paté','-'),
                'categories' => ['3', '8']
            ],
            [
                'name' => 'Chinese world',
                'email' => 'cina@gmail.com',
                'password' => Hash::make('12345678'),
                'address' => 'Via adoro i cinesi, ABC',
                'vat_number' => '44444555555',
                'slug' => Str::slug('Chinese world','-'),
                'categories' => ['1', '8']
            ],
            [
                'name' => 'Indian food',
                'email' => 'india@gmail.com',
                'password' => Hash::make('12345678'),
                'address' => 'Via india, A',
                'vat_number' => '4444499999',
                'slug' => Str::slug('Indian food','-'),
                'categories' => ['2', '8']
            ],
            [
                'name' => 'No gluten here',
                'email' => 'gluten@gmail.com',
                'password' => Hash::make('12345678'),
                'address' => 'Via india, A',
                'vat_number' => '00000000001',
                'slug' => Str::slug('No gluten here','-'),
                'categories' => ['9', '8', '7']
            ],
        ];


        //Ciclo Array Users

        foreach ($users as $user) {
            $new_user = new User();
            $new_user->name = $user['name'];
            $new_user->email = $user['email'];
            $new_user->password = $user['password'];
            $new_user->address = $user['address'];
            $new_user->vat_number = $user['vat_number'];
            $new_user->slug = $user['slug'];
            $new_user->save();

            $categories = $user['categories'];

            foreach ($categories as $category) {
                $new_user->categories()->attach([$category]);
            }
        }

    }
}
