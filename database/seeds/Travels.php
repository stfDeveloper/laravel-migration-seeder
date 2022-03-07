<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Travel;

class Travels extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run (Faker $faker)
    {  
        for ($i=0; $i <20 ; $i++) { 
            $travel = new Travel();
            $travel->luogo =$faker->word(1); 
            $travel->informazioni = $faker->text(100); 
            $travel->partenza =$faker->dayOfWeek(); 
            $travel->durata = $faker->randomDigit(); 
            $travel->save();
        }
    }
}
