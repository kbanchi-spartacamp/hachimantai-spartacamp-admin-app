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
                'map_url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3061.0124475617263!2d141.08878081538884!3d39.89635359504634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f851365ad854a13%3A0x54999ba2c543cf87!2z44GK44KJ44G744Gu5rip5rOJ!5e0!3m2!1sja!2sjp!4v1632320537597!5m2!1sja!2sjp',
            ],
            [
                'name' => '森乃湯',
                'description' => '神経痛・筋肉症・関節症・五十肩・病後回復期・痔疾・関節のこわばり・打ち身・くじき・慢性消化器病・冷え症・運動麻痺・疲労回復・健康増進に効きます。',
                'image_url' => 'https://www.hachimantai-ss.co.jp/~morinoyu/imgs/ph_morinoyu.jpg',
                'hp_url' => 'https://www.hachimantai-ss.co.jp/~morinoyu/',
                'map_url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d393680.0879674971!2d140.74851930943592!3d39.56804687931652!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f856ae4994eac23%3A0x26fc05ab231949f5!2z5YWr5bmh5bmz5rip5rOJ6aSoIOajruS5g-a5rw!5e0!3m2!1sja!2sjp!4v1632320606671!5m2!1sja!2sjp',
            ],
            [
                'name' => '焼走りの湯',
                'description' => '岩手山のふもと、豊かな自然の中に湧いた焼走りの湯でのんびりと。木々や空を眺めながらの、開放的な大浴場はお湯もたっぷりです。',
                'image_url' => 'https://www.hachimantai-ss.co.jp/~yakehashiri/onsen/imgs/onsen1.jpg',
                'hp_url' => 'https://www.hachimantai-ss.co.jp/~yakehashiri/onsen/onsen.html',
                'map_url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3061.9765356601433!2d141.03931371538815!3d39.87476349634547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f856ca5ade95589%3A0xc83f4cbff167f781!2z5pel5biw44KK5rip5rOJ6aSo44CM54S86LWw44KK44Gu5rmv44CN!5e0!3m2!1sja!2sjp!4v1632320652468!5m2!1sja!2sjp',
            ],

        ];
        # DB::table->insertでレコードの登録
        DB::table('hotsprings')->insert($param);
    }
}
