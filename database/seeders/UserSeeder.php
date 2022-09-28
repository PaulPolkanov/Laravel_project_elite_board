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
        $idData = [1, 2];
        $nameData = ['PavelDev', 'Запчасти ALL'];
        $emailData = ['paspapolkanov@yandex.ru', 'example@mail.ru'];
        $passwordData = ['$2y$10$hN2ZnxZ.R1m92T7xt1IVJeI9Ek9azfkAczQAIk3jf1zx08mGfNXgG', '$2y$10$hN2ZnxZ.R1m92T7xt1IVJeI9Ek9azfkAczQAIk3jf1zx08mGfNXgG'];
        $id_roleData = [2, 13];
        $surnameData = [null, null];
        $addressData = ['Moscow', 'Moscow'];
        $phone_numberData = ['+79200016042', '+79200000042'];
        $id_companyData = [null, 1];
        $data = [];
        //password 123!!!
        for($i=0; $i < count($nameData); $i++) {
            $randArr = [
                'id' => $idData[$i],
                'name' => $nameData[$i],
                'email' => $emailData[$i],
                'password' => $passwordData[$i],
                'id_role' => $id_roleData[$i],
                'surname' => $surnameData[$i],
                'address' => $addressData[$i],
                'phone_number' => $phone_numberData[$i],
                'id_company' => $id_companyData[$i]];
                array_push($data, $randArr);
            }
        DB::table('users')->insertOrIgnore($data);
    }
}