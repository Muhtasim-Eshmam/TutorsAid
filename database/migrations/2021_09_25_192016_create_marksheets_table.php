<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarksheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
                Schema::create('marksheets', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('name');
                $table->string('mock1');
                $table->string('mock2');
                $table->string('mock3');
                $table->string('email');
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
        Schema::dropIfExists('marksheets');
    }
}
