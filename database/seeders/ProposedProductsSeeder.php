<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProposedProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('proposed_products')->truncate();
        DB::table('proposed_products')->insert([
            ['id' => 1,'company_id' =>1, 'name' =>'冷蔵庫(主)','remarks' => '値引き要相談'],
            ['id' => 2,'company_id' =>1, 'name' =>'電気ケトル(主)','remarks' => '84°Cで保温可能'],
            ['id' => 3,'company_id' =>1, 'name' =>'化粧水(主)','remarks' => '美容液ジェルとセットでお得'],
            ['id' => 4,'company_id' =>1, 'name' =>'お弁当箱(主)','remarks' => 'お味噌汁専用容器が付属'],
            ['id' => 5,'company_id' =>1, 'name' =>'漬物石(主)','remarks' => '計算された重心で味シミバッチリ'],
            ['id' => 6,'company_id' =>2, 'name' =>'かき氷機(主)','remarks' => 'ふわふわな氷が話題沸騰中'],
            ['id' => 7,'company_id' =>2, 'name' =>'水筒(主)','remarks' => 'こぼれにくい設計で安心感抜群！'],
        ]);
    }
}
