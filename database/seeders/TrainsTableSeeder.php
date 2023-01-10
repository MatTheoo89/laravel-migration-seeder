<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 100; $i++) {
            /*
            $table->string('company', 50);
            $table->string('Departure_station', 50);
            $table->string('Arrival_station', 50);
            $table->time('Departure_time');
            $table->time('Arrival_time');
            $table->string('Code_train', 18);
            $table->unsignedTinyInteger('Number_carriages');
            $table->boolean('is_inTime');
            $table->boolean('is_Delete')->default(0);
            $table->timestamps();
            */
            $new_train = new Train();
            $new_train->company = $faker->company();
            $new_train->Departure_station = $faker->city();
            $new_train->Arrival_station = $faker->city();
            $new_train->Departure_time = $faker->time();
            $new_train->Arrival_time = $faker->time();
            $new_train->Code_train = $faker->bothify('??-##-####?##?-###');
            $new_train->Number_carriages = $faker->bothify('##');
            $new_train->is_inTime = $faker->randomFloat(0, 0, 1);
            //dump($new_train);
            $new_train->save();
        }
    }
}
