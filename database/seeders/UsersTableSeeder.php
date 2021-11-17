<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Database\Eloquent\Model;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = {
            'name'  => 'Baton Company',
            'email' => 'batonshippingltd@gmail.com',
            'password'  => Hash::make('123456789'),
            'remember_token' => str_random(10)
        }
        User::create($user)
    }
}
