<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        $nameData =['Запчасти ALL'];
        $contact_personData =['Артём'];
        $about_companyData =['Интернет-магазин б/у и новых автозапчастей.
        Отправляем в любой город РФ!
        БЕСПЛАТНАЯ ДОСТАВКА до транспортной компании!
        Торгуем в РОЗНИЦУ и ОПТОМ!
        Установим и покрасим купленные у нас детали в малярно-кузовном центре.'];
        $work_scheduleData =['ПН-ПТ: 09:00-20:00
        СБ-ВС: 10:00-19:30'];
        $delivery_infoData =['Доставка осуществляется в будние дни с 09.00 до 18.00'];
        $adressData = ['Москва ул. Дубнинская д 45 оф 7'];
        
        for($i=0; $i < count($nameData); $i++) {
            $randArr = [
                'title' => $nameData[$i],
                'contact_person' => $contact_personData[$i],
                'about_company' => $about_companyData[$i],
                'work_schedule' => $work_scheduleData[$i],
                'delivery_info' => $delivery_infoData[$i],
                'adress' => $adressData[$i]];
                array_push($data, $randArr);
        }
        
        DB::table('companies')->insertOrIgnore($data);
    }
}