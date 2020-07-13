<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Str;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        User::create([
         'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => Str::random(60),
        'api_key'=>Str::random(60),
        'remember_token' => Str::random(10),
        ]);
    }
}
