<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJinsuranceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('jinsurances', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('date');
			$table->string('member_name')->nullable();
			$table->date('member_bdate');
			$table->string('spouse_name')->nullable();
			$table->date('spouse_bdate');
			$table->string('first_dependant')->nullable();
			$table->date('first_bdate');
			$table->string('second_dependant')->nullable();
			$table->date('second_bdate');
			$table->string('third_dependant')->nullable();
			$table->date('third_bdate');
			$table->string('fourth_dependant')->nullable();
			$table->date('fourth_bdate');
			$table->string('parent1_name')->nullable();
			$table->date('parent1_date');
			$table->string('parent2_name')->nullable();
			$table->date('parent2_date');
			$table->string('parent3_name')->nullable();
			$table->date('parent3_date');
			$table->string('parent4_name')->nullable();
			$table->date('parent4_date');
			$table->string('parent1_id')->nullable();
			$table->string('parent2_id')->nullable();
			$table->string('parent3_id')->nullable();
			$table->string('parent4_id')->nullable();			
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
		Schema::drop('jinsurance');
	}

}
