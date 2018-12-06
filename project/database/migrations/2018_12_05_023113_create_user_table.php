<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');#유저 인덱스
            $table->string('name');#유저 이름
            $table->string('email')->unique();#유저 이메일이며 아이디로 사용하려고 unique옵션 사용
            $table->string('password');#패스워드
            $table->rememberToken();#토큰
            $table->timestamps();#시간

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
