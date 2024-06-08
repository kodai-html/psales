<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthoritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authorities')->truncate();
        DB::table('authorities')->insert([
            ['id' => 1, 'name' => 'Supervision'],
            ['id' => 2, 'name' => 'leader'],
            ['id' => 3, 'name' => 'member'],
        ]);
    }
}
