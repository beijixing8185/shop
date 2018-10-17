<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tag',200)->default('')->comment('标签');
            $table->string('name',100)->default('')->comment('文章标题');
            $table->string('author',30)->default(1)->comment('作者');
            $table->text('content')->comment('内容');
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
        Schema::dropIfExists('articles');
    }
}
