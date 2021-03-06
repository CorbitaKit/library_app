<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = ['admin','user','librarian'];

        for($i = 0; $i < count($role); $i++){
            DB::table('roles')->insert([
                'name' => $role[$i]
            ]);
        }
    }
}
