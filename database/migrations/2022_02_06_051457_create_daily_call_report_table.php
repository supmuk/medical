<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDailyCallReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daily_call_report', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('headquarter_name')->nullable();
            $table->string('place_of_working')->nullable();
            $table->string('working_with')->nullable()->comment('List of registered employees');;
            $table->string('visited_doctor_name')->nullable()->comment('List of doctor');
            $table->string('visited_chemist_name')->nullable()->comment('List of Chemist');
            $table->longText('pob')->nullable()->comment('personel order booking');
            $table->longText('stockist_visited')->nullable()->comment('Added by admin at the time of registration');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daily_call_report');
    }
}
