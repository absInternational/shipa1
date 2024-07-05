<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortToPortsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('port_to_ports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('port_detail_id');
            $table->string('delivery_port_name', 255);
            $table->string('delivery_country', 255);
            $table->string('delivery_latitude', 255)->nullable();
            $table->string('delivery_longitude', 255)->nullable();
            $table->double('price', 15, 2)->default(0.00);
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
        Schema::dropIfExists('port_to_ports');
    }
}
