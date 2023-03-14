<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use Faker\Factory as Faker;


class EmpanadasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        foreach( range(1,25) as $value){
            DB::table('empanadas') -> insert([
                'nombre'=> $faker->name,
                'sabor' => $faker->word,
            ]);
        }
        
    }
}
