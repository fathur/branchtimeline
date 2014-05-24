<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRantingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ranting', function(Blueprint $table)
		{
			$table->increments('id')->unsigned();
			$table->integer('topik_id')->unsigned()->index();
			$table->integer('pembuat_id')->unsigned();
			$table->string('nama',50)->index();
			$table->text('deskripsi');
			
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
		Schema::drop('ranting');
	}

}
