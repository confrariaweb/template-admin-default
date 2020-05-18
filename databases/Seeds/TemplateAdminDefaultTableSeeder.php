<?php

namespace ConfrariaWeb\TemplateAdminDefault\Databases\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('templates')->insert([
            'title' => 'Admin Default',
            'view' => 'templateAdminDefault',
            'status' => 1,
            'user_id' => 1
        ]);
    }
}
