<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Notifications extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('notifications', function (Blueprint $table) {
            $table->bigIncrements('notification_id');
            $table->string('notification_title', 50);
            $table->text('notification_link');
            $table->text('notification');
            $table->enum('view_status', array('seen', 'unseen'))->default('unseen');
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
        Schema::drop('notifications');
    }
}