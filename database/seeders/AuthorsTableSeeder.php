<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use App\Models\Author; 

class AuthorsTableSeeder extends Seeder
{

  public function run()
  {
    DB::table('authors')->delete();
    
    $faker = Faker::create();

    for ($i = 0; $i < 10; $i++) {
      Author::create([
        'name' => $faker->name, 
        // các trường khác nếu cần
      ]);
    }

  }

}