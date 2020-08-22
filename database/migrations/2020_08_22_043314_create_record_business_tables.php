<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordBusinessTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('record_business', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('customer_id')->nullable();
            $table->tinyInteger('type')->default(1)->comment('1:办卡、2：完成收费项目');
            $table->integer('thing_id')->comment('卡或者项目的id');
            $table->dateTime('date')->nullable()->comment('啥时候做的');
            $table->timestamps();
            $table->softDeletes();
            $table->index('user_id');
            $table->index('customer_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('record_business');
    }
}
