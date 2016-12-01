<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdmissionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('admissions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('date');
			$table->date('date_of_birth');
			$table->date('date_of_death');
			$table->string('surname')->nullable();
			$table->string('firstname')->nullable();
			$table->string('other_names')->nullable();
			$table->string('id_number')->nullable();
			$table->string('certificate_no')->nullable();
			$table->string('cause_of_death')->nullable();
			$table->string('place_of_death')->nullable();
			$table->string('narration')->nullable();
			$table->string('admission_no')->nullable();
			$table->string('gender')->nullable();
			$table->string('kin_address')->nullable();
			$table->string('kin_relationship')->nullable();
			$table->string('kin2_address')->nullable();
			$table->string('kin2_relationship')->nullable();			
			$table->string('category')->nullable();
			$table->date('date_released')->nullable();
			$table->string('kin_surname')->nullable();
			$table->string('kin_firstname')->nullable();
			$table->string('kin_other_names')->nullable();
			$table->string('kin_phone')->nullable();
			$table->string('kin_id_number')->nullable();
			$table->string('kin2_surname')->nullable();
			$table->string('kin2_firstname')->nullable();
			$table->string('kin2_other_names')->nullable();
			$table->string('kin2_phone')->nullable();
			$table->string('kin2_id_number')->nullable();
			$table->string('age')->nullable();
			$table->string('level_of_education')->nullable();
			/*$table->string('usual_residence')->nullable();*/
			$table->string('status')->default('admitted');
			/*$table->string('pathologist_fee')->default('0.00');*/
			$table->string('name_of_doctor')->nullable();
			$table->string('contact')->nullable();
			$table->date('date_of_pathology');
			$table->string('umash_services_fee')->default('0.00');
			$table->string('description')->nullable();
			$table->string('pathologist')->nullable();
			$table->string('police_case')->nullable();
			$table->string('kin_remarks')->nullable();
			$table->string('kin2_remarks')->nullable();
			$table->string('document1')->nullable();
			$table->string('document2')->nullable();
			$table->string('document3')->nullable();
			$table->string('document4')->nullable();
			$table->string('document5')->nullable();
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
		Schema::drop('admissions');
	}

}
