<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtikelTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('artikel', function(Blueprint $table)
		{
			$table->increments('id')->unsigned();
			$table->integer('topik_id')->unsigned()->index();
			$table->string('judul')->index();
			$table->text('isi');			
			$table->dateTime('tanggal_peristiwa');
			$table->string('status',10);
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('artikel');
	}

}
