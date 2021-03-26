<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Animal;

class AnimalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker) //Funziona grazie ad Autowiring Laravel
    {
        for($i=0;$i<100;$i++){
          $animal = new Animal();
          $animal->name = $faker->name();
          $animal->name_scientific = $faker->name();
          $animal->description = $faker->name();
          $animal->color = $faker->name();
          $animal->class = $faker->name();
          $animal->save();
        }
    }
}
