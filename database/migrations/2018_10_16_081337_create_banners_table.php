<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('type')->default(1)->comment('1首页,2其他');
            $table->string('url',200)->default('')->comment('图片地址');
            $table->integer('sort')->default(1)->comment('排序');
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
        Schema::dropIfExists('banners');
    }
}
