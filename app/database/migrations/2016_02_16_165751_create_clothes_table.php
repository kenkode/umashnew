<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClothesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clothes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('date');
			$table->date('date_of_departure');
			$table->string('coffin');
			$table->string('name');
			$table->string('adm_id');
			$table->string('crosstype');
			$table->string('suit')->nullable();
			$table->string('trouser')->nullable();
			$table->string('coat')->nullable();
			$table->string('shirt')->nullable();
			$table->string('tie')->nullable();
			$table->string('vest')->nullable();
			$table->string('shoes')->nullable();
			$table->string('socks')->nullable();
			$table->string('underwear')->nullable();
			$table->string('belt')->nullable();
			$table->string('cufflincks')->nullable();
			$table->string('boxers')->nullable();
			$table->string('dress')->nullable();
			$table->string('skirt')->nullable();
			$table->string('trouser_lady')->nullable();
			$table->string('blouse')->nullable();
			$table->string('stocking')->nullable();
			$table->string('headwear')->nullable();
			$table->string('gloves')->nullable();
			$table->string('petticoat')->nullable();
			$table->string('shoes_lady')->nullable();			
			$table->string('pantie')->nullable();
			$table->string('camisol')->nullable();
			$table->string('coat_lady')->nullable();
			$table->string('baby1')->nullable();
			$table->string('baby2')->nullable();
			$table->string('baby3')->nullable();
			$table->string('baby4')->nullable();
			$table->string('baby5')->nullable();
			$table->string('officer')->nullable();
			$table->string('relative')->nullable();
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
		Schema::drop('clothes');
	}

}
