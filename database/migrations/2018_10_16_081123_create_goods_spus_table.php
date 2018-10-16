<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsSpusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods_spus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('spu_name',60)->comment('商品名称');

            $table->integer('gc_id_1')->unsigned()->default(0)->comment('商品一级分类id');
            $table->integer('gc_id_2')->unsigned()->default(0)->comment('商品二级分类id');
            $table->integer('gc_id_3')->unsigned()->default(0)->comment('商品三级分类id');
            $table->string('gc_name',200)->comment('所属商品分类名称');

            $table->text('spec_name')->comment('规格名称(数组序列化)');
            $table->string('main_image',200)->nullable()->default('')->comment('商品主图地址');
            $table->text('content')->comment('商品详情');

            $table->decimal('market_price',10,2)->default(0.00)->comment('市场价格');
            $table->decimal('price',10,2)->default(0.00)->comment('零售价格');

            $table->integer('num')->nullable()->default(0)->comment('SPU库存量');
            $table->integer('areaid')->nullable()->default(0)->comment('发货地id');
            $table->decimal('freight',10,2)->default(0.00)->comment('运费 0为免运费');
            $table->tinyInteger('status')->default(0)->comment('商品状态【0:未上架（待上架）; 1:上架在售; 2:自主下架; 3:系统下架（违规下架）; 5:初建待申请;7:待审核;8:审核不通过;】');

            $table->integer('salen_num')->nullable()->default(0)->comment('销售量');
            $table->integer('evaluate_num')->nullable()->default(0)->comment('评价数量');
            $table->integer('star')->nullable()->default(0)->comment('评价星级');

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
        Schema::dropIfExists('goods_spus');
    }
}
