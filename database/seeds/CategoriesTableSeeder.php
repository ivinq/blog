<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        	[
        		'name' => 'Мобильные телефоны', 
        		'code' => 'mobiles', 
        		'description' => 'Новейшие смартфоны!',
        		'image' => 'categories/1.jpg',
        	],
        	[
        		'name' => 'Портативная техника', 
        		'code' => 'portable', 
        		'description' => 'Портативная и носимая электроника!',
        		'image' => 'categories/1.jpg',
        	],
        	[
        		'name' => 'Бытовая техника', 
        		'code' => 'appliances', 
        		'description' => 'Бытовая техника для дома по выгодным ценам!',
        		'image' => 'categories/1.jpg',
        	],
        ]);
    }
}
