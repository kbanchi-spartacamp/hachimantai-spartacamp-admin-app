<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestaurantSeeder extends Seeder
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
                'name' => 'レストラン こかげ',
                'description' => '美味しいし、メニューが豊富。お腹減っているときはBigサイズにしたほうがいいかも。',
                'image_url' => 'https://tblg.k-img.com/restaurant/images/Rvw/88262/640x640_rect_88262506.jpg',
                'hp_url' => 'https://tabelog.com/iwate/A0305/A030501/3000303/',
                'latitude' => '39.91712168302213',
                'longitude' => '141.0070452823109',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => '大更ホルモン',
                'description' => 'もつ鍋がめっちゃ美味しい。',
                'image_url' => 'https://tblg.k-img.com/restaurant/images/Rvw/20638/20638405.jpg',
                'hp_url' => 'https://tabelog.com/iwate/A0305/A030501/3006740/',
                'latitude' => '39.93557603644526',
                'longitude' => '141.09537582834406',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'レストラン LAMP',
                'description' => '洋風なお店。ステーキ美味しそう。',
                'image_url' => 'https://lamp-iwate.jeez.jp/images/1539759246106.jpg',
                'hp_url' => 'https://lamp-iwate.jeez.jp/',
                'latitude' => '39.916532111585546',
                'longitude' => '140.97757842649105',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at
                ' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => '森のイタリアン La Mia Mamma',
                'description' => '予約が必要。',
                'image_url' => 'https://smiler.jp/wp-content/uploads/2021/06/20210514_111139-e1623654811813.jpg',
                'hp_url' => 'https://foodplace.jp/la-mia-mamma/',
                'latitude' => '39.89799823126893',
                'longitude' => '141.00903636881836',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'つどい',
                'description' => 'お好み焼きが美味しそう、コロナ期間は県外客は入店できないかも。',
                'image_url' => 'https://pic1.homemate-research.com/pubuser1/pubuser_facility_img/8/3/9/00000000000080146938/0000004344/00000000000080146938_0000004344_1.jpg',
                'hp_url' => 'https://www.hotpepper.jp/strJ001204145/',
                'latitude' => '39.91253950159999',
                'longitude' => '141.0958488111467',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => '養老乃瀧 西根町店',
                'description' => '牛丼が美味しい。',
                'image_url' => 'https://media-cdn.tripadvisor.com/media/photo-s/11/51/9c/0e/retro-atmosphere.jpg',
                'hp_url' => 'https://www.hotpepper.jp/strJ000625589/',
                'latitude' => '39.911969878542266',
                'longitude' => '141.0951472013596',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];
        DB::table('restaurants')->insert($param);
    }
}
