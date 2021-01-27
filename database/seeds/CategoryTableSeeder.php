<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategoryTableSeeder extends Seeder
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
            
            'name' => 'categorie 1',
            'slug' => 'categorie-1',



            ],
            
            [
            
                'name' => 'categorie 2',
                'slug' => 'categorie-2',
    
                
    
                ]
            
            
            
            ]);
    }
}
