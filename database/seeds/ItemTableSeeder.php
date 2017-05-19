<?php

use Illuminate\Database\Seeder;
use App\Item;

class ItemTableSeeder extends Seeder
{
/**
* Run the database seeds.
*
* @return void
*/
public function run()
{
 $faker = Faker\Factory::create();

    for($i = 0; $i < 50; $i++) {
        App\Item::create([
            'title' => $faker->word,
            'description' => $faker->paragraph
            
        ]);
    }
    
    
    
    
    
}
}
