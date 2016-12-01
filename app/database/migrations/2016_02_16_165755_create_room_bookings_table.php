<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRoomBookingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('room_bookings', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('book_date');			
			$table->string('client_id')->nullable();
			$table->string('room_id')->nullable();
			$table->string('charges')->nullable();
			$table->string('status')->nullable();			
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
		Schema::drop('room_bookings');
	}

}
