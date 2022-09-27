<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BoardImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        $nameData =['first_board_1.png', 'first_board_2.png', 'first_board_3.png', 'default.png'];
        $id_boardData =[1, 1, 1, 2];

        
        
        for($i=0; $i < count($nameData); $i++) {
            $randArr = [
                'name' => $nameData[$i],
                'id_board' => $id_boardData[$i]];
                array_push($data, $randArr);
        }
        
        DB::table('board_images')->insertOrIgnore($data);
    }
}