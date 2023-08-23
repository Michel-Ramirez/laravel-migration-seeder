<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {


        for ($i = 0; $i < 5; $i++) {

            $train = new Train();
            $train->departure_station = $faker->word();
            $train->arrival_station = $faker->word();
            $train->departure_time = $faker->time();
            $train->arrival_time = $faker->time();
            $train->train_id = $faker->numerify('BLT-####');
            $train->train_coach = rand(1, 10);
            $train->is_timely = rand(0, 1);
            $train->is_deleted = rand(0, 1);

            $train->save();
        }
    }
}
