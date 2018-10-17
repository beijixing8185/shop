<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username',30)->default('')->comment('用户昵称');
            $table->string('name',30)->default('')->comment('用户名');
            $table->string('password',250)->default('')->comment('密码');
            $table->string('avatar',200)->default('')->comment('头像');
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
        Schema::dropIfExists('admin_users');
    }
}
