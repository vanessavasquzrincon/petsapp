<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pet;



class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pet = new pet;
        $pet->name = 'coco';
        $pet->photo = "coco4.png";
        $pet->kind = "Dog";
        $pet->weight = 10;
        $pet->age =  4;
        $pet->bread =  "chihuahua";
        $pet->location =  "Manizales";
        $pet->save();


        $pet = new pet;
        $pet->name = 'perla';
        $pet->photo = "perla.png";
        $pet->kind = "Cat";
        $pet->weight = 10;
        $pet->age =  4;
        $pet->bread =  "persa";
        $pet->location =  "Medellin";
        $pet->save();

        $pet = new pet;
        $pet->name = 'Tomy';
        $pet->photo = "tomy.png";
        $pet->kind = "Cat";
        $pet->weight = 10;
        $pet->age =  4;
        $pet->bread =  "Angora";
        $pet->location =  "Medellin";
        $pet->save();
        
    
    }
}
