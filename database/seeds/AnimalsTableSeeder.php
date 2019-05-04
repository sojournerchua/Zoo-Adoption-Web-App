<?php

use App\Animal;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class AnimalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Animal::create([
            'name' => 'Cuddle',
            'type' => 'Cat',
            'image' => null,
            'dob' => Carbon::now(),
            'description'=> "A cute and cuddly cat",
            'state' => "available"]);

        Animal::create([
            'name' => 'Sophie',
            'type' => 'Dog',
            'image' => null,
            'dob' => Carbon::now(),
            'description'=> "A playful mini schnauzer",
            'state' => "available"]);

        Animal::create([
            'name' => 'Twinkie',
            'type' => 'Dog',
            'image' => null,
            'dob' => Carbon::now(),
            'description'=> "A loving family maltese",
            'state' => "unavailable"]);

            Animal::create([
                'name' => 'Thumper',
                'type' => 'Rabbit',
                'image' => null,
                'dob' => Carbon::now(),
                'description'=> "An active holland lop bunny",
                'state' => "available"]);

    }
}
