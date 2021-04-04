<?php

namespace Database\Seeders;

use App\Models\User;
use BaconQrCode\Encoder\ByteMatrix;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
           'name' => 'Jerson Ferrer Marcony',
           'email' => 'jferrer00747@gmail.com',
           'password' => bcrypt('12345678') 
        ])->assignRole('Admin');

        User::factory(30)->create();
    }
}
