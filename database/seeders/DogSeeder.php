<?php

namespace Database\Seeders;

use App\Models\Dog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class DogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $dog = new Dog();
            $dog->name = $faker->name();
            $dog->color = $faker->colorName();
            $dog->slug = Str::slug($dog->name, '-');
            $dog->save();
        }
    }
}
