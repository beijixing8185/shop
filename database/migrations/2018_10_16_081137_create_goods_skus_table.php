<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsSkusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods_skus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sku_name',200)->comment('商品SKU名称【含规格】');
            $table->integer('spu_id')->unsigned()->comment('商品SPUid');
            $table->string('spc_name',30)->comment('规格名称');
            $table->string('sku_spec',255)->nullable()->default('')->comment('SKU规格值(数组序列化)');
            $table->string('sku_image_url',255)->nullable()->default('')->comment('商品主图地址');

            $table->decimal('market_price',10,2)->default(0.00)->comment('市场价格');
            $table->decimal('price',10,2)->default(0.00)->comment('商品价格【零售价】');
            $table->integer('num')->nullable()->default(0)->comment('SKU库存量');
            $table->integer('click_count')->nullable()->default(0)->comment('点击数');
            $table->integer('collect_count')->nullable()->default(0)->comment('收藏数');
            $table->integer('sale_num')->nullable()->default(0)->comment('销售量');
            $table->tinyInteger('status')->default(1)->comment('有效状态【0:无效;1:有效;-1:已删除】');


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
        Schema::dropIfExists('goods_skus');
    }
}
