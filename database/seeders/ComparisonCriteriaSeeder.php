<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComparisonCriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comparison_criteria')->truncate();
        DB::table('comparison_criteria')->insert([
            ['id' => 1,'company_id' => 1,'proposed_product_id' => 1,'attribute'=>'料金'],
            ['id' => 2,'company_id' => 1,'proposed_product_id' => 1,'attribute'=>'重さ'],
            ['id' => 3,'company_id' => 1,'proposed_product_id' => 1,'attribute'=>'耐用年数'],
            ['id' => 4,'company_id' => 1,'proposed_product_id' => 1,'attribute'=>'保険の有無'],
            ['id' => 5,'company_id' => 1,'proposed_product_id' => 1,'attribute'=>'保温性'],

            ['id' => 6,'company_id' => 1,'proposed_product_id' => 2,'attribute'=>'料金'],
            ['id' => 7,'company_id' => 1,'proposed_product_id' => 2,'attribute'=>'保湿性'],
            ['id' => 8,'company_id' => 1,'proposed_product_id' => 2,'attribute'=>'内容量'],
            ['id' => 9,'company_id' => 1,'proposed_product_id' => 2,'attribute'=>'認知度'],
            ['id' => 10,'company_id' => 1,'proposed_product_id' => 2,'attribute'=>'満足度'],

            ['id' => 11,'company_id' => 1,'proposed_product_id' => 3,'attribute'=>'料金'],
            ['id' => 12,'company_id' => 1,'proposed_product_id' => 3,'attribute'=>'耐用年数'],
            ['id' => 13,'company_id' => 1,'proposed_product_id' => 3,'attribute'=>'満足度'],

            ['id' => 14,'company_id' => 1,'proposed_product_id' => 4,'attribute'=>'料金'],
            ['id' => 15,'company_id' => 1,'proposed_product_id' => 4,'attribute'=>'保湿性'],
            ['id' => 16,'company_id' => 1,'proposed_product_id' => 4,'attribute'=>'内容量'],
            ['id' => 17,'company_id' => 1,'proposed_product_id' => 4,'attribute'=>'認知度'],
            ['id' => 18,'company_id' => 1,'proposed_product_id' => 4,'attribute'=>'満足度'],

            ['id' => 19,'company_id' => 1,'proposed_product_id' => 5,'attribute'=>'料金'],
            ['id' => 20,'company_id' => 1,'proposed_product_id' => 5,'attribute'=>'重さ'],

            ['id' => 21,'company_id' => 2,'proposed_product_id' => 6,'attribute'=>'料金'],
            ['id' => 22,'company_id' => 2,'proposed_product_id' => 6,'attribute'=>'耐用年数'],
            ['id' => 23,'company_id' => 2,'proposed_product_id' => 6,'attribute'=>'満足度'],
            
            ['id' => 24,'company_id' => 2,'proposed_product_id' => 7,'attribute'=>'料金'],
            ['id' => 25,'company_id' => 2,'proposed_product_id' => 7,'attribute'=>'保湿性'],
            ['id' => 26,'company_id' => 2,'proposed_product_id' => 7,'attribute'=>'内容量'],
        ]);
    }
}
