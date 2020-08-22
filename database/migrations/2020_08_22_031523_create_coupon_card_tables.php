<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponCardTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupon_card', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->nullable();
            $table->decimal('price', 10, 4)->nullable();
            $table->decimal('percentage', 10, 4)->nullable()->comment('提成');
            $table->dateTime('start_time')->nullable();
            $table->dateTime('end_time')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->text('introduction')->comment('优惠卡介绍');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('coupon_card_project', function (Blueprint $table) {
            $table->id();
            $table->integer('card_id')->nullable();
            $table->integer('project_id')->nullable();
            $table->integer('times')->default(0);
            $table->string('introduction')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->index('card_id');
            $table->index('project_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coupon_card');
        Schema::dropIfExists('coupon_card_project');
    }
}
