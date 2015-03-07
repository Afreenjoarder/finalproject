<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateVotersAndCandidatesTables extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('voters', function(Blueprint $table)
		{
			$table->increments('voter_id');
			$table->string('voterName')->default('');
			$table->timestamps();
		});
		Schema::create('candidates', function(Blueprint $table) {
			$table->increments('id');
			$table->string('candidateName')->default('');
			$table->string('symbol')->default('');
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
		Schema::drop('voters');
		Schema::drop('candidates');
	}
}