<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfficersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('officers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ap_no');
            $table->string('substantive_rank');
            $table->string('gender');
            $table->string('firstname');
            $table->string('surname');
            $table->string('othernames')->nullable();
            $table->string('state_of_origin');
            $table->string('lga');
            $table->date('dateofbirth');
            $table->date('date_enlisted');
            $table->date('date_promoted')->nullable();
            $table->string('rankonenlistment');
            $table->string('div_formation');
            $table->date('date_of_posting');
            $table->string('education_qualification');
            $table->string('field_of_study');
            $table->string('generalduty_specialist');
            $table->string('specialist_field')->nullable();
            $table->string('previous_command')->nullable();
            $table->date('date')->nullable();
            $table->string('marital_status');
            $table->string('name_of_spouse');
            $table->string('religion');
            $table->string('tribe');
            $table->string('bloodgroup');
            $table->string('genotype');
            $table->string('nextofkin1');
            $table->string('relationship1');
            $table->string('nextofkin2');
            $table->string('relationship2');
            $table->string('home_address');
            $table->date('promotion_history_inspr')->nullable();
            $table->date('promotion_history_sgt')->nullable();
            $table->date('promotion_history_cpl')->nullable();
            $table->date('date_confirmedto_inspr')->nullable();
            $table->string('pensionpinno')->nullable();
            $table->string('pfa')->nullable();
            $table->string('ippis_no')->nullable();
            $table->string('nhf')->nullable();
            $table->string('pay_point')->nullable();
            $table->string('gsm_number');
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
        Schema::dropIfExists('officers');
    }
}
