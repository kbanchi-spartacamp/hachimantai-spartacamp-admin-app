<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            [
                'name' => 'リボーン・マジック・サーカス 仙台',
                'description' => '短期間でのレンタルはここが一番安いかも',
                'image_url' => 'https://www.reborn-car.jp/sendai/img/sendai01.jpg',
                'hp_url' => 'https://www.reborn-car.jp/lease/',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];
        DB::table('cars')->insert($param);
    }
}
