<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RoleRelations extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('role_relations', function (Blueprint $table) {
            $table->smallIncrements('role_relation_id');
            $table->smallInteger('fk_admin_id');
            $table->smallInteger('fk_role_id');
            $table->time('created_time');
            $table->date('created_date');
            $table->smallInteger('created_by');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('role_relations');
    }
}