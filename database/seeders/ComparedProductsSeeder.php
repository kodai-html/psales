<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComparedProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('compared_products')->truncate();
        DB::table('compared_products')->insert([
            ['id' => 1, 'proposed_id' => 1, 'company_id' =>1, 'name' =>'冷蔵庫(比較商品1)','remarks' => '値引き要相談(比較商品1)'],
            ['id' => 2, 'proposed_id' => 1, 'company_id' =>1, 'name' =>'冷蔵庫(比較商品2)','remarks' => '値引き要相談(比較商品2)'],
            ['id' => 3, 'proposed_id' => 1, 'company_id' =>1, 'name' =>'冷蔵庫(比較商品3)','remarks' => '値引き要相談(比較商品3)'],
            ['id' => 4, 'proposed_id' => 1, 'company_id' =>1, 'name' =>'冷蔵庫(比較商品4)','remarks' => '値引き要相談(比較商品4)'],
            ['id' => 5, 'proposed_id' => 1, 'company_id' =>1, 'name' =>'冷蔵庫(比較商品5)','remarks' => '値引き要相談(比較商品5)'],
            ['id' => 6, 'proposed_id' => 1, 'company_id' =>1, 'name' =>'電気ケトル(比較商品1)','remarks' => '84°Cで保温可能(比較商品1)'],
            ['id' => 7, 'proposed_id' => 1, 'company_id' =>1, 'name' =>'電気ケトル(比較商品2)','remarks' => '84°Cで保温可能(比較商品2)'],
            ['id' => 8, 'proposed_id' => 1, 'company_id' =>1, 'name' =>'電気ケトル(比較商品3)','remarks' => '84°Cで保温可能(比較商品3)'],
            ['id' => 9, 'proposed_id' => 1, 'company_id' =>1, 'name' =>'電気ケトル(比較商品4)','remarks' => '84°Cで保温可能(比較商品4)'],
            ['id' => 10, 'proposed_id' => 1, 'company_id' =>1, 'name' =>'電気ケトル(比較商品5)','remarks' => '84°Cで保温可能(比較商品5)'],
            ['id' => 11, 'proposed_id' => 1, 'company_id' =>1, 'name' =>'化粧水(比較商品1)','remarks' => '美容液ジェルとセットでお得(比較商品1)'],
            ['id' => 12, 'proposed_id' => 1, 'company_id' =>1, 'name' =>'化粧水(比較商品2)','remarks' => '美容液ジェルとセットでお得(比較商品2)'],
            ['id' => 13, 'proposed_id' => 1, 'company_id' =>1, 'name' =>'化粧水(比較商品3)','remarks' => '美容液ジェルとセットでお得(比較商品3)'],
            ['id' => 14, 'proposed_id' => 1, 'company_id' =>1, 'name' =>'化粧水(比較商品4)','remarks' => '美容液ジェルとセットでお得(比較商品4)'],
            ['id' => 15, 'proposed_id' => 1, 'company_id' =>1, 'name' =>'化粧水(比較商品5)','remarks' => '美容液ジェルとセットでお得(比較商品5)'],
            ['id' => 16, 'proposed_id' => 1, 'company_id' =>1, 'name' =>'お弁当箱(比較商品1)','remarks' => 'お味噌汁専用容器が付属(比較商品1)'],
            ['id' => 17, 'proposed_id' => 1, 'company_id' =>1, 'name' =>'お弁当箱(比較商品2)','remarks' => 'お味噌汁専用容器が付属(比較商品2)'],
            ['id' => 18, 'proposed_id' => 1, 'company_id' =>1, 'name' =>'お弁当箱(比較商品3)','remarks' => 'お味噌汁専用容器が付属(比較商品3)'],
            ['id' => 19, 'proposed_id' => 1, 'company_id' =>1, 'name' =>'お弁当箱(比較商品4)','remarks' => 'お味噌汁専用容器が付属(比較商品4)'],
            ['id' => 20, 'proposed_id' => 1, 'company_id' =>1, 'name' =>'お弁当箱(比較商品5)','remarks' => 'お味噌汁専用容器が付属(比較商品5)'],
            ['id' => 21, 'proposed_id' => 1, 'company_id' =>1, 'name' =>'漬物石(比較商品1)','remarks' => '計算された重心で味シミバッチリ(比較商品1)'],
            ['id' => 22, 'proposed_id' => 1, 'company_id' =>1, 'name' =>'漬物石(比較商品2)','remarks' => '計算された重心で味シミバッチリ(比較商品2)'],
            ['id' => 23, 'proposed_id' => 1, 'company_id' =>1, 'name' =>'漬物石(比較商品3)','remarks' => '計算された重心で味シミバッチリ(比較商品3)'],
            ['id' => 24, 'proposed_id' => 1, 'company_id' =>1, 'name' =>'漬物石(比較商品4)','remarks' => '計算された重心で味シミバッチリ(比較商品4)'],
            ['id' => 25, 'proposed_id' => 1, 'company_id' =>1, 'name' =>'漬物石(比較商品5)','remarks' => '計算された重心で味シミバッチリ(比較商品5)'],
            ['id' => 26, 'proposed_id' => 1, 'company_id' =>2, 'name' =>'かき氷機(比較商品1)','remarks' => 'ふわふわな氷が話題沸騰中(比較商品1)'],
            ['id' => 27, 'proposed_id' => 1, 'company_id' =>2, 'name' =>'かき氷機(比較商品2)','remarks' => 'ふわふわな氷が話題沸騰中(比較商品2)'],
            ['id' => 28, 'proposed_id' => 1, 'company_id' =>2, 'name' =>'かき氷機(比較商品3)','remarks' => 'ふわふわな氷が話題沸騰中(比較商品3)'],
            ['id' => 29, 'proposed_id' => 1, 'company_id' =>2, 'name' =>'かき氷機(比較商品4)','remarks' => 'ふわふわな氷が話題沸騰中(比較商品4)'],
            ['id' => 30, 'proposed_id' => 1, 'company_id' =>2, 'name' =>'かき氷機(比較商品5)','remarks' => 'ふわふわな氷が話題沸騰中(比較商品5)'],
            ['id' => 31, 'proposed_id' => 1, 'company_id' =>2, 'name' =>'かき氷機(比較商品6)','remarks' => 'ふわふわな氷が話題沸騰中(比較商品6)'],
            ['id' => 32, 'proposed_id' => 1, 'company_id' =>2, 'name' =>'水筒(比較商品1)','remarks' => 'こぼれにくい設計で安心感抜群！(比較商品1)'],
            ['id' => 33, 'proposed_id' => 1, 'company_id' =>2, 'name' =>'水筒(比較商品2)','remarks' => 'こぼれにくい設計で安心感抜群！(比較商品2)'],
            ['id' => 34, 'proposed_id' => 1, 'company_id' =>2, 'name' =>'水筒(比較商品3)','remarks' => 'こぼれにくい設計で安心感抜群！(比較商品3)'],
            ['id' => 35, 'proposed_id' => 1, 'company_id' =>2, 'name' =>'水筒(比較商品4)','remarks' => 'こぼれにくい設計で安心感抜群！(比較商品4)'],
            ['id' => 36, 'proposed_id' => 1, 'company_id' =>2, 'name' =>'水筒(比較商品5)','remarks' => 'こぼれにくい設計で安心感抜群！(比較商品5)'],
            ['id' => 37, 'proposed_id' => 1, 'company_id' =>2, 'name' =>'水筒(比較商品6)','remarks' => 'こぼれにくい設計で安心感抜群！(比較商品6)'],
        ]);
    }
}
