<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        //password 123!!!
            $randArr = [
                'name' => 'PavelDev',
                'email' => 'paspapolkanov@yandex.ru',
                'password' => '$2y$10$hN2ZnxZ.R1m92T7xt1IVJeI9Ek9azfkAczQAIk3jf1zx08mGfNXgG',
                'id_role' => 2,
                'surname' => 'Polkanov',
                'address' => 'Moscow',
                'phone_number' => '+79200016042',];
                array_push($data, $randArr);
        
        DB::table('users')->insertOrIgnore($data);
    }
}