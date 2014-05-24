<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePustakaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pustaka', function(Blueprint $table)
		{
			$table->increments('id')->unsigned();
			$table->integer('artikel_id')->unsigned()->index();
			$table->string('sumber');
			$table->date('tanggal_kutip');
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
		Schema::drop('pustaka');
	}

}
