<?php

use Illuminate\Database\Seeder;
use App\Student;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(CategoryTableSeeder::class);
        //factory(Student::class, 150)->create();
    }
}
