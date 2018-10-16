<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleCatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articale_cates', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pid')->unsigned()->default(0)->comment('上级id');
            $table->string('name',30)->default('')->comment('栏目名称');
            $table->integer('sort')->default(1)->comment('排序');
            $table->tinyInteger('level')->default(1)->comment('等级');
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
        Schema::dropIfExists('articale_cates');
    }
}
