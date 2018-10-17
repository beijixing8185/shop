<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderPrepaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opder_prepays', function (Blueprint $table) {
            $table->increments('id');

            // 形如：wxpay => 微信支付
            $table->tinyInteger('type')->default(1)->comment('支付类型1支付宝,2微信');

            $table->string('prepay_id',64)->default('')->comment('申请支付ID');
            $table->string('pay_sn',50)->default('')->comment('申请支付单号');

            $table->string('out_trade_no',32)->comment('订单支付SN');
            $table->string('time_start',14)->comment('交易起始时间');
            $table->string('time_expire',14)->comment('交易结束时间');

            $table->integer('cash_fee')->default(0)->comment('实支付金额');
            $table->integer('uid')->unsigned()->default(0)->comment('付款人id');
            $table->string('openid',200)->default('')->comment('付款人openid');
            $table->string('ip',20)->default('')->comment('付款终端IP');

            $table->string('trade_state',32)->default('NOTPAY')->comment('交易状态【NOTPAY/SUCCESS/USERPAYING/REVOKED/REFUND/PAYERROR/CLOSED】');
            $table->text('trade_state_desc')->comment('交易状态描述');
            $table->string('time_end',14)->default('')->comment('支付完成时间');

            $table->tinyInteger('is_paying')->default(0)->comment('是否支付中(0:否;1:是,2支付完成;)');

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
        Schema::dropIfExists('opder_prepays');
    }
}
