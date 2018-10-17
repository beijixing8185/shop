<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');

            $table->string('order_sn',20)->comment('订单编号');

            $table->integer('uid')->unsigned()->comment('用户id');
            $table->string('mobile',11)->nullable()->default('')->comment('用户手机号');

            $table->decimal('goods_amounts',10,2)->default(0.00)->comment('商品结算金额');
            $table->decimal('order_amounts',10,2)->default(0.00)->comment('订单结算金额');
            $table->decimal('payable_amount',10,2)->default(0.00)->comment('订单支付金额');


            $table->string('pay_sn',64)->nullable()->default('')->comment('订单支付单号');
            $table->text('payment')->comment('支付信息【所有支付明细序列化数组】');

            // 地址数组序列化，含：收货人姓名、地址、手机号等
            $table->text('address_info')->comment('收货人地址信息');

            // 订单状态
            $table->tinyInteger('plat_order_state')->default(1)->comment('订单状态（1:（已下单）待付款; 2:（已付款）待发货; 3:（已发货）待收货; 4:（已收货）待评价; 9:已完成; -1:已取消; -2:已退单; -5:已退货; -9:已删除; ）');
            $table->tinyInteger('evaluation_state')->default(0)->comment('评价状态(0:未评价; 1:买家已评论; 2:卖家已评论; 3:双方已互评; 9:已过期未评价)');

            $table->integer('pay_time')->nullable()->comment('支付时间');
            $table->integer('arrival_time')->nullable()->comment('签收时间');

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
        Schema::dropIfExists('orders');
    }
}
