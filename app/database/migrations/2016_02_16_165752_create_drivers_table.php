<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDriversTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('drivers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('driver_name')->nullable();
			$table->string('driver_contact')->nullable();
			$table->string('vehicle_reg_no')->nullable();
			$table->string('morgue')->nullable();
			$table->date('driver_date');
			$table->string('crosstype')->nullable();
			$table->string('flower')->nullable();
			$table->string('narrative')->nullable();
			$table->string('status')->nullable();
			$table->string('attendant')->nullable();			
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
		Schema::drop('drivers');
	}

}
