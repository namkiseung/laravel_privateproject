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
      Schema::create('posts', function (Blueprint $table) {
         $table->increments('id');#index를 대체할 'id'컬럼
         $table->string('title');#post제목
         $table->text('body');#post내용
         $table->string('thumbnail');#섬네일(리스트에서 post관점)
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
        Schema::dropIfExists('posts');
    }
}
