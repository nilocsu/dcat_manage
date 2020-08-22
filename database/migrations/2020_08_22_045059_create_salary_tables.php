<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalaryTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salary', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable()->comment('用户id（员工类型）');
            $table->decimal('pro_sum', 20, 4)->default(0.0000)->comment('任何方式支付前提下的完成收费项目的价值');
            $table->decimal('card_sum', 20, 4)->default(0.0000)->comment('任何方式支付前提下的完成办卡的价值');
            $table->decimal('make_money_income', 20, 4)->default(0.0000)->comment('招揽的用钱支付的营业额');
            $table->decimal('pro_add', 20, 4)->default(0.0000)->comment('做项目提成');
            $table->decimal('base_salary', 20, 4)->default(0.0000)->comment('底薪');
            $table->decimal('sum_salary', 20, 4)->default(0.0000)->comment('总的工资');
            $table->dateTime('settle_date')->nullable()->comment('结算日期');
            $table->string('remark', 255)->nullable();
            $table->timestamps();
            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salary');
    }
}
