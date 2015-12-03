<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects_table', function (Blueprint $table) {
            $table->string('subject_code',15)->primarykey;
            $table->string('subject_title',40)->nullable;
            $table->integer('credit_units');
            $table->integer('credit_hours');  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('subjects_table');
    }
}
