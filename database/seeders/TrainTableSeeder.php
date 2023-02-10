<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i < 20 ; $i++){
            $new_train_object = new Train();
            $new_train_object->Azienda = $faker->name();
            $new_train_object->stazione_di_partenza = $faker->city();
            $new_train_object->stazione_di_arrivo = $faker->city();
            $new_train_object->orario_di_partenza = $faker->dateTime();
            $new_train_object->orario_di_arrivo = $faker->dateTime();
            $new_train_object->codice_treno = $faker->currencyCode();
            $new_train_object->numero_carrozze = $faker->numberBetween(1, 30);
            $new_train_object->in_orario = $faker->boolean();
            $new_train_object->Cancellato = $faker->boolean();
            $new_train_object->save();
        }
    }
}
