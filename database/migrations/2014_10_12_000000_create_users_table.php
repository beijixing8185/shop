<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username')->default('');
            $table->string('mobile',11);
            $table->string('email')->default('');
            $table->string('password')->nullable()->default('');
            $table->tinyInteger('sex')->nullable()->default(0)->comment('性别(0:未知;1:男;2:女)');
            $table->tinyInteger('status')->nullable()->default(1)->comment('状态,1有效,0无效');
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
        Schema::dropIfExists('users');
    }
}
