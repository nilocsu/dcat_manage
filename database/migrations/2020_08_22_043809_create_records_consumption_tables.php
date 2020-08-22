<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordsConsumptionTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records_consumption', function (Blueprint $table) {
            $table->id();
            $table->integer('customer_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->tinyInteger('consumption_type')->nullable()->comment('消费类型 1：收费项目、2.办卡、3.充值余额、4.给卡增加次数');
            $table->decimal('price', 20, 4)->default(0.0000);
            $table->tinyInteger('pay_type')->nullable()->comment('1：从卡里扣除，2：从余额扣除，3.支付');
            $table->dateTime('pay_time')->nullable();
            $table->tinyInteger('is_record')->default(0)->comment('是否被营业额所统计 0：没有、1:统计了');
            $table->string('remark', 255)->nullable();
            $table->timestamps();
            $table->index('customer_id');
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
        Schema::dropIfExists('records_consumption');
    }
}
