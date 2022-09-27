<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        $nameData =['Superadmin', 'Admin', 'User'];
        
        for($i=0; $i < count($nameData); $i++) {
            $randArr = [
                'name' => $nameData[$i]];
                array_push($data, $randArr);
        }
        
        DB::table('roles')->insertOrIgnore($data);
    }
}