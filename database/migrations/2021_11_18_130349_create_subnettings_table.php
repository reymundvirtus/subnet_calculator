<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubnettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subnettings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('octet1');
            $table->string('octet2');
            $table->string('octet3');
            $table->string('octet4');
            $table->string('no_of_subnet');
            $table->string('subnet_mask');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subnettings');
    }
}
