<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubnetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subnets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('network_id');
            $table->string('subnet_mask');
            $table->string('host_id_range');
            $table->string('no_of_usable_host');
            $table->string('broadcast_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subnets');
    }
}
