<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Add a record with Eloquent  ORM
    $user = new User;
    $user->document = 75000009;
    $user->fullname = "Sandra Perez";
    $user->gender = "Female";
    $user->birthdate = "2000-03-12";
    $user->photo = "ico-user4.png";
    $user->phone = 3228456974;
    $user->email = "sandraperez@gmail.com";
    $user->password =  bcrypt('admin');
    $user->role =  "Admin";
    $user->save();

    // Add   a record with Array
    DB::table('users')->insert([
        'document' => 7500007,
        'fullname' => 'Nicolas Gomez',
        'gender' => 'Male',
        'birthdate' => '2000-03-12',
        'photo' => 'ico-user3.png',
        'phone' => 3127031518,
        'email' => "nicolasgomez@gmail.com",
        'password' => bcrypt('12345')




    ]);
    }
}
