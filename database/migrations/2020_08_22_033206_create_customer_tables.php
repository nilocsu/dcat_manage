<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->tinyInteger('sex')->default(1)->comment('1:男,2:女');
            $table->string('phone', 11)->nullable();
            $table->string('weixin', 30)->nullable();
            $table->decimal(20, 4)->default(0.0000)->comment('余额');
            $table->tinyInteger('status')->default(1)->comment('状态：1可用、0不可用');
            $table->timestamps();
        });
        Schema::create('customer_card', function (Blueprint $table) {
            $table->id();
            $table->integer('customer_id')->nullable();
            $table->integer('card_id')->nullable();
            $table->dateTime('opening_time')->nullable();
            $table->dateTime('dead_time')->nullable();
            $table->decimal('price',20, 4)->default(0.0000)->comment('余额');
            $table->string('remarks', 255)->nullable();
            $table->integer('recommend_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->index('customer_id');
            $table->index('card_id');
            $table->index('recommend_id');
        });
        Schema::create('customer_card_project', function (Blueprint $table) {
            $table->id();
            $table->integer('customer_card_id')->nullable();
            $table->integer('project_id')->nullable();
            $table->integer('residual_times');
            $table->timestamps();
            $table->index('customer_card_id');
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
        Schema::dropIfExists('customer');
        Schema::dropIfExists('customer_card');
        Schema::dropIfExists('customer_card_project');
    }
}
