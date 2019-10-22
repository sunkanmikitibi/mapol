<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mopos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('serialno')->unsigned();
            $table->string('APFN');
            $table->string('rank');
            $table->string('names');
            $table->string('duty_post');
            $table->string('arms_serial_no')->nullable();
            $table->string('make')->nullable();
            $table->string('breach_number')->nullable();
            $table->string('armournation_stock')->nullable();
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
        Schema::dropIfExists('mopos');
    }
}
