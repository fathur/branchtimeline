<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopikTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('topik', function(Blueprint $table)
		{
			$table->increments('id')->unsigned();
			$table->integer('pembuat_id')->unsigned();
			$table->string('judul')->index();
			$table->string('slug')->unique();
			$table->text('deskripsi');
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
		Schema::drop('topik');
	}

}
