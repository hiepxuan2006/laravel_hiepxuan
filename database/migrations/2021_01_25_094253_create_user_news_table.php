<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_news', function (Blueprint $table) {
            $table->bigIncrements('ID');
            $table->string('image',255);
            $table->string('username',30);
            $table->string('passsword',255);
            $table->string('fullname',255);
            $table->string('email',255);
            $table->tinyInteger('role');
            $table->softDeletes();
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
        Schema::dropIfExists('user_news');
    }
}
