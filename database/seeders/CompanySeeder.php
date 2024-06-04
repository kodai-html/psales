<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->truncate();
        DB::table('companies')->insert([
            ['id' => 1, 'name' => 'Google'],
            ['id' => 2, 'name' => 'Apple'],
            ['id' => 3, 'name' => 'facebook'],
            ['id' => 4, 'name' => 'Microsoft'],
            ['id' => 5, 'name' => 'Amazon'],
        ]);
    }
}
