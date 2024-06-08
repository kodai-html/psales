<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProposedProductDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('proposed_product_details')->truncate();
        DB::table('proposed_product_details')->insert([
            ['id' => 1,'proposed_id' =>1,'type' =>1,'int_value' =>150000,'str_value' =>'','unit' =>'円','remarks' => 'クーポン使用可能商品'],
            ['id' => 2,'proposed_id' =>1,'type' =>1,'int_value' =>25,'str_value' =>'','unit' =>'kg','remarks' => '設置補助可能'],
            ['id' => 3,'proposed_id' =>1,'type' =>1,'int_value' =>10,'str_value' =>'','unit' =>'年','remarks' => '買い替え割有り！'],
            ['id' => 4,'proposed_id' =>1,'type' =>3,'int_value' =>1,'str_value' =>'','unit' =>'','remarks' => '保証証を提示で無償交換！'],
            ['id' => 5,'proposed_id' =>2,'type' =>2,'int_value' =>0,'str_value' =>'やや高い','unit' =>'','remarks' => '開ける頻度が多くてもすぐ冷却'],
            ['id' => 6,'proposed_id' =>2,'type' =>1,'int_value' =>5000,'str_value' =>'','unit' =>'円','remarks' => '業界最安値！'],
            ['id' => 7,'proposed_id' =>2,'type' =>2,'int_value' =>0,'str_value' =>'高い','unit' =>'','remarks' => ''],
            ['id' => 8,'proposed_id' =>2,'type' =>1,'int_value' =>1500,'str_value' =>'','unit' =>'ml','remarks' => ''],
            ['id' => 9,'proposed_id' =>2,'type' =>4,'int_value' =>80,'str_value' =>'','unit' =>'%','remarks' => ''],
            ['id' => 10,'proposed_id' =>3,'type' =>4,'int_value' =>90,'str_value' =>'','unit' =>'%','remarks' => ''],
            ['id' => 11,'proposed_id' =>3,'type' =>1,'int_value' =>2500,'str_value' =>'','unit' =>'円','remarks' => ''],
            ['id' => 12,'proposed_id' =>3,'type' =>1,'int_value' =>0,'str_value' =>'一般的','unit' =>'','remarks' => ''],
            ['id' => 13,'proposed_id' =>3,'type' =>4,'int_value' =>70,'str_value' =>'','unit' =>'%','remarks' => ''],
            ['id' => 14,'proposed_id' =>4,'type' =>1,'int_value' =>3500,'str_value' =>'','unit' =>'円','remarks' => ''],
            ['id' => 15,'proposed_id' =>4,'type' =>2,'int_value' =>0,'str_value' =>'やや高い','unit' =>'','remarks' => ''],
            ['id' => 16,'proposed_id' =>4,'type' =>1,'int_value' =>800,'str_value' =>'','unit' =>'ml','remarks' => ''],
            ['id' => 17,'proposed_id' =>4,'type' =>4,'int_value' =>60,'str_value' =>'','unit' =>'%','remarks' => ''],
            ['id' => 18,'proposed_id' =>4,'type' =>4,'int_value' =>80,'str_value' =>'','unit' =>'%','remarks' => ''],
            ['id' => 19,'proposed_id' =>5,'type' =>1,'int_value' =>50000,'str_value' =>'','unit' =>'円','remarks' => ''],
            ['id' => 20,'proposed_id' =>5,'type' =>1,'int_value' =>15,'str_value' =>'','unit' =>'Kg','remarks' => ''],
            ['id' => 21,'proposed_id' =>6,'type' =>1,'int_value' =>6500,'str_value' =>'','unit' =>'円','remarks' => '他社より安くします！'],
            ['id' => 22,'proposed_id' =>6,'type' =>1,'int_value' =>5,'str_value' =>'','unit' =>'年','remarks' => '5年間は必ずふわふわ'],
            ['id' => 23,'proposed_id' =>6,'type' =>4,'int_value' =>90,'str_value' =>'','unit' =>'%','remarks' => ''],
            ['id' => 24,'proposed_id' =>7,'type' =>1,'int_value' =>5500,'str_value' =>'','unit' =>'円','remarks' => '二つ購入で一割引き'],
            ['id' => 25,'proposed_id' =>7,'type' =>2,'int_value' =>0,'str_value' =>'高い','unit' =>'','remarks' => '6時間キンキンを維持！'],
            ['id' => 26,'proposed_id' =>7,'type' =>1,'int_value' =>1000,'str_value' =>'','unit' =>'ml','remarks' => ''],
        ]);
    }
}
