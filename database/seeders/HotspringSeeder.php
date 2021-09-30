<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HotspringSeeder extends Seeder
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
                'name' => 'おらほの温泉',
                'description' => '大浴場の大きな窓から見えるゆったりとした庭、その向こうに自然の雑木林、そして雄大な岩手山の姿を仰ぎながら入浴を楽しむ贅沢な気分をじっくり満喫する事が出来ます。',
                'image_url' => 'https://orahono-onsen.net/onsen/imgs/omumanoyu.jpg',
                'hp_url' => 'https://www.orahono-onsen.net/',
                'latitude' => '39.89654702860672',
                'longitude' => '141.09099095543968',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'name' => '森乃湯',
                'description' => '神経痛・筋肉症・関節症・五十肩・病後回復期・痔疾・関節のこわばり・打ち身・くじき・慢性消化器病・冷え症・運動麻痺・疲労回復・健康増進に効きます。',
                'image_url' => 'https://www.hachimantai-ss.co.jp/~morinoyu/imgs/ph_morinoyu.jpg',
                'hp_url' => 'https://www.hachimantai-ss.co.jp/~morinoyu/',
                'latitude' => '39.898125179259324',
                'longitude' => '140.9737842670877',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => '焼走りの湯',
                'description' => '岩手山のふもと、豊かな自然の中に湧いた焼走りの湯でのんびりと。木々や空を眺めながらの、開放的な大浴場はお湯もたっぷりです。',
                'image_url' => 'https://www.hachimantai-ss.co.jp/~yakehashiri/onsen/imgs/onsen1.jpg',
                'hp_url' => 'https://www.hachimantai-ss.co.jp/~yakehashiri/onsen/onsen.html',
                'latitude' => '39.8748664190112',
                'longitude' => '141.04159895728537',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],


        ];
        # DB::table->insertでレコードの登録
        DB::table('hotsprings')->insert($param);
    }
}
