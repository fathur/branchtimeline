<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKomentarTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('komentar', function(Blueprint $table)
		{
			$table->increments('id')->unsigned();
			$table->integer('user_id')->unsigned()->index();
			$table->integer('artikel_id')->unsigned()->index();
			$table->text('isi');
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
		Schema::drop('komentar');
	}

}
