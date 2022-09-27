<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BoardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        $title =['BMW M2 F87 2019', 'Haval Jolion 2021'];
        $price =[2900000, 1899000];
        $id_user = [1, 1];
        $id_category = [1, 1];
        $address = ["Moscow", "Nizny Novgorod"];
        $description = ['- Авто без пробега по РФ
        - Вы будете первым владельцем
        - Цена под ключ во Владивостоке', 'Модификация 1.5 AMT (150 л.с.) 4WD. Комплектация Premium.
        В нашем дилерском центре действуют очень выгодные предложения на Haval Jolion 2021 года.
        Цены действительно вас порадуют, всегда можно рассчитать цену со скидкой. Опции: Люк, Усилитель руля, Подогрев передних сидений, Круиз-контроль, ABS'];
        $new_product = [0, 0];
        $delivery_type_id = [1, 1];

        for($i=0; $i < count($title); $i++) {
            $randArr = [
                'title' => $title[$i],
                'price' => $price[$i],
                'created_at' => '2022-09-24 18:33:36',
                'id_user' => $id_user[$i],
                'id_category' => $id_category[$i],
                'address' => $address[$i],
                'description' => $description[$i],
                'new_product' => $new_product[$i],
                'delivery_type_id' => $delivery_type_id[$i]
            ];
            array_push($data, $randArr);
        }
        
        DB::table('boards')->insertOrIgnore($data);
    }
}