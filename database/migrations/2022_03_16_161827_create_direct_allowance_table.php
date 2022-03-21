<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirectAllowanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direct_allowance', function (Blueprint $table) {
            $table->id();
            $table->string('hq')->comment('Headquater');
            $table->string('ehq')->comment('Ex Headquater');
            $table->string('outstation')->comment('Outstation');
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
        Schema::dropIfExists('direct_allowance');
    }
}
