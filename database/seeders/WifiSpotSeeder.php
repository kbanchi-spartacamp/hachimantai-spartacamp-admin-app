<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WifiSpotSeeder extends Seeder
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
                'name' => 'サラダファーム',
                'description' => 'サラダファームです。美味しいソフトクリームが食べれます。店員さんが可愛いです。',
                'image_url' => 'images/sarada.jpeg',
                'hp_url' => 'https://salad-farm.jp/',
                'latitude' => '39.90799175531971',
                'longitude' => '141.05471136881872',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'ノレグレット',
                'description' => 'おしゃれそうなカフェ',
                'image_url' => 'images/noreguret.jpeg',
                'hp_url' => 'https://www.nollegretto.com/',
                'latitude' => '39.9554496311578',
                'longitude' => '141.0784019841643',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => '八幡平市役所結（ゆい）のひろば',
                'description' => '心が落ち着けそなスペース',
                'image_url' => 'images/yui.jpeg',
                'hp_url' => 'http://www.sopnet.co.jp/archives/projects/hachimantai-government-buildings',
                'latitude' => '39.95683830673836',
                'longitude' => '141.07119004183647',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => '大更駅待合室',
                'description' => '起業家支援センターの目の前',
                'image_url' => 'images/oobukeeki.jpeg',
                'hp_url' => 'https://www.jreast.co.jp/estation/stations/341.html',
                'latitude' => '39.91402764039571',
                'longitude' => '141.1007601246386',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];
        DB::table('wifi_spots')->insert($param);
    }
}
