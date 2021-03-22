<?php

use Illuminate\Database\Seeder;
use App\Player;
use Faker\Generator as Faker;
class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20 ; $i++) {
          $newPlayer = new Player();
          $newPlayer->nome = $faker->name();
          $newPlayer->cognome = $faker->lastname();
          $newPlayer->data_nascita = $faker->date();
          $newPlayer->luogo_nascita = $faker->city();
          $newPlayer->save();
        }
    }
}
