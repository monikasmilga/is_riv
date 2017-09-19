<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateT03SDOKTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('T03_SDOK', function(Blueprint $table)
		{
			$table->integer('COUNT', true);
			$table->string('ID', 36)->unique('ID_UNIQUE');
			$table->timestamp('CREATED_AT')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('UPDATED_AT')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->dateTime('DELETED_AT')->nullable();
			$table->string('T03_KODAS_KS', 12)->nullable()->comment('Kliento kodas');
			$table->string('T03_DOK_NR', 20)->nullable()->comment('Dokumento numeris');
			$table->dateTime('T03_DATA_MOK')->nullable()->comment('Mokėjimo data');
			$table->string('T03_KODAS_VL', 12)->nullable()->comment('Valiutos kodas');
			$table->dateTime('T03_DATA_DOK')->nullable()->comment('Dokumento data');
			$table->dateTime('T03_DATA_DSK')->nullable()->comment('Diskonto data');
			$table->float('T03_SUMA_DB_VL', 18)->nullable()->comment('Suma debete valiuta');
			$table->float('T03_SUMA_CR_VL', 18)->nullable()->comment('Suma kredite valiuta');
			$table->float('T03_SUMA_DB', 12)->nullable()->comment('Suma debete');
			$table->float('T03_SUMA_CR', 12)->nullable()->comment('Suma kredite');
			$table->float('T03_DSK_PROC', 6)->nullable()->comment('Diskonto procentas');
			$table->float('T03_SUMA_PLK', 12)->nullable()->comment('Palūkanų suma');
			$table->string('T03_USERIS', 12)->nullable()->comment('Kas koregavo');
			$table->dateTime('T03_R_DATE')->nullable()->comment('Kada koregavo');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('T03_SDOK');
	}

}
