<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BoardParametersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        $id_boardData =[1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 2, 2, 2, 2, 2, 2, 2, 2];
        $nameData =['Марка', 'Тип кузова', 'Пробег', 'Год выпуска', 'Тип двигателя', 'КПП', 'Материал салона', 'Цвет салона', 'Цвет', 'Марка', 'Тип кузова', 'Пробег', 'Год выпуска', 'Тип двигателя', 'КПП', 'Материал салона', 'Цвет салона', 'Цвет'];
        $valueData = [ 'BMW', 'Рестайлинг', '12 000', '2019', 'Бензин', 'Робот', 'Кожа', 'Черный', 'Белый Металик', ' Haval', 'Внедорожник', '5 000', '2021', 'Бензин', 'Автомат', 'Кожа', 'Светлый', 'Белый'];

        
        
        for($i=0; $i < count($nameData); $i++) {
            $randArr = [
                'board_id' => $id_boardData[$i],
                'name' => $nameData[$i],
                'value' => $valueData[$i],];
                array_push($data, $randArr);
        }
        
        DB::table('board_parameters')->insertOrIgnore($data);
    }
}