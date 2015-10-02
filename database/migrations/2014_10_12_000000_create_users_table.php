
.<?php

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
            $table->integer('employee_id')->unique()->primary()->unsigned();
            $table->string('name', 30);
            $table->string('gender', 6)->nullable();
            $table->string('email', 40)->nullable();
            $table->char('contact',12)->nullable();
            $table->string('username', 30)->unique();
            $table->string('password', 30);
            $table->char('usertype', 1);
            $table->string('department', 40)->nullable();
            $table->string('college', 40)->nullable();
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
        Schema::drop('users');
    }
}
