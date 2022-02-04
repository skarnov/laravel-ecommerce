<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleRelationSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('role_relations')->insert([
            'fk_admin_id' => '1',
            'fk_role_id' => '1',
            'created_time' => date('H:i:s'),
            'created_date' => date('Y-m-d'),
            'created_by' => '1',
        ]);
    }
}