<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customers;
use Faker\Factory as Faker;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i < 100; $i++) {
            # code...
            $faker = Faker::create();
            $customer = new Customers;
            $customer->name = $faker->name;
            $customer->email = $faker->email;
            $customer->address = $faker->address;
            $customer->DOB = $faker->date();
            $customer->gender = "male";
            $customer->save();
        }
    }
}
