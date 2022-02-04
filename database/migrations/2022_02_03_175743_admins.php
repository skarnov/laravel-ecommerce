<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Admins extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('admins', function (Blueprint $table) {
            $table->smallIncrements('admin_id');
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->string('user_name', 50);
            $table->enum('admin_sex', array('male', 'female'));
            $table->string('admin_email', 100);
            $table->string('admin_password', 255);
            $table->string('admin_image', 100);
            $table->string('admin_mobile', 20);
            $table->text('admin_address');
            $table->enum('admin_status', array('active', 'inactive'));
            $table->time('created_time');
            $table->date('created_date');
            $table->smallInteger('created_by');
            $table->time('modified_time');
            $table->date('modified_date');
            $table->smallInteger('modified_by');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('admins');
    }
}