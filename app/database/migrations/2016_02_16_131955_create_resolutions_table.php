<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateResolutionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('resolutions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('enquiry_id')->unsigned();
			$table->foreign('enquiry_id')->references('id')->on('enquiries');
			$table->date('date');
			$table->text('resolution')->nullable();
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
		Schema::drop('resolutions');
	}

}
