<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++){
        $train = new Train();
        $train->agency = $faker->randomElement(['Trenitalia', 'Italo']);
        $train->departing_from = $faker->randomElement(['Napoli centrale', 'Milano centrale', 'Bologna centrale', 'Firenze Santa Maria Novella']);
        $train->going_to = $faker->randomElement(['Benevento centrale', 'Torino Porta nuova', 'Bari centrale', 'Venezia']);
        $train->leaving_time = $faker->time();
        $train->arrives_time = $faker->time();
        $train->id_train = $faker->randomNumber(1, 10);
        $train->coach = $faker->randomNumber(1, 12);
        $train->time = $faker->boolean();
        $train->deleted = $faker->boolean();       

            $train->save();
        }
    }
}
