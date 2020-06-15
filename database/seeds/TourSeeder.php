<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run( Faker $faker)
    {
        for($i=0; $i<10; $i++){
            DB::table('tours')->insert([
                "name"=>$faker->name,
                "image"=>"images/tour.png",
                "typetour"=>$faker->name,
                "schedule"=>$faker->name,
                "depart"=>$faker->date,
                "number"=>$faker->numberBetween(2,20),
                "price"=>$faker->numberBetween(200000,20000000)
            ]);
            }
    }
}