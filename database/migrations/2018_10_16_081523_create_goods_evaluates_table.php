<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsEvaluatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods_evaluates', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('uid')->nullable()->comment('用户id');
            $table->integer('spu_id')->nullable()->comment('商品id');
            $table->integer('oid')->nullable()->comment('订单id');
            $table->integer('stars')->nullable()->default(5)->comment('评价星级');
            $table->text('conent')->comment('评价内容');
            $table->tinyInteger('status')->default(1)->comment('有效状态,1有效,0无效');
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
        Schema::dropIfExists('goods_evaluates');
    }
}
