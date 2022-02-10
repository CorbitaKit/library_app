<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LibraryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 5; $i++){
            DB::table('libraries')->insert([
                "name" => "Library ".$i,
                "address" => "Address ".$i
            ]);
        }
    }
}
