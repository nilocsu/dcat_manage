<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAdminUsersTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('admin_users', function (Blueprint $table) {
            $table->tinyInteger('sex');
            $table->decimal('base_salary', 20, 4)->comment('底薪');
            $table->string('phone', 11);
            $table->tinyInteger('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('admin_users', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->dropColumn('sex');
            $table->dropColumn('phone');
            $table->dropColumn('base_salary');
            $table->dropColumn('status');
        });
    }
}
