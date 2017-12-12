<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users',function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('password')->bcrypt();
            $table->string('gender');
            $table->string('birthday');
            $table->string('mobile');
            $table->string('email',30)->unique();
            $table->string('address');
            $table->string('school');
            $table->string('city');
            $table->string('province');
            $table->string('join');
            $table->rememberToken();
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
        Schema::dropIfExist('users');
    }
}
