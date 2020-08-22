<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordsTurnoverTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records_turnover', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date')->nullable()->comment('某一天（以天为单位）');
            $table->decimal('money_income', 20, 4)->default(0.0000)->comment('收入的钱：payType=3');
            $table->decimal('money_outcome', 20, 4)->default(0.0000)->comment('给客户退的钱（退余额和退卡）payType=0');
            $table->decimal('card_reduce', 20, 4)->default(0.0000)->comment('通过卡消费的钱数 payType=1');
            $table->decimal('balance_reduce', 20, 4)->default(0.0000)->comment('通过余额消费 payType=2');
            $table->decimal('sum_income', 20, 4)->default(0.0000)->comment('总的收入 money_income-money_outcome');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('records_turnover');
    }
}
