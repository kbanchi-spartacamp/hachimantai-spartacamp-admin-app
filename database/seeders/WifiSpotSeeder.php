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
                'image_url' => 'https://rurubu.jp/img_link/jti/SightImage/M/SI_80002904_121645.jpg',
                'hp_url' => 'https://salad-farm.jp/',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'ノレグレット',
                'description' => 'おしゃれそうなカフェ',
                'image_url' => 'https://image.space.rakuten.co.jp/d/strg/ctrl/9/f243cdd37f2617ab10c7f06cd1249f912642f767.08.2.9.2.jpeg',
                'hp_url' => 'https://www.nollegretto.com/',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => '八幡平市役所結（ゆい）のひろば',
                'description' => '心が落ち着けそなスペース',
                'image_url' => 'http://www.sopnet.co.jp/wp/wp-content/uploads/2016/08/008_L7Z5634.jpg',
                'hp_url' => 'http://www.sopnet.co.jp/archives/projects/hachimantai-government-buildings',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => '大更駅待合室',
                'description' => '起業家支援センターの目の前',
                'image_url' => 'https://stat.ameba.jp/user_images/20190603/18/ttm123210/3a/26/j/o1024076814421681551.jpg',
                'hp_url' => 'https://www.jreast.co.jp/estation/stations/341.html',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];
        DB::table('wifi_spots')->insert($param);
    }
}
