<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vehicles', function(Blueprint $table) {
            $table->increments('id');
            
            $table->integer('category_id')->unsigned();
    		$table->foreign('category_id')->references('id')->on('categories');

    		$table->integer('vehicletype_id')->unsigned();
    		$table->foreign('vehicletype_id')->references('id')->on('vehicle_types');
    		
            $table->string('name');
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
		Schema::drop('vehicles');
	}

}
