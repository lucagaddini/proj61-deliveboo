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
            ]
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
