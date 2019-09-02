<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOptionsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('options', function (Blueprint $table) {
			$table->increments('id');
			$table->string('title');
			$table->string('slug')->unique()->nullable();
			$table->text('description');
			$table->text('content');
			$table->text('weight');
			$table->boolean('is_default');
			$table->string('images')->nullable();
			$table->boolean('on_sale')->default(true);
			$table->integer('max_quantity');
			$table->integer('top_order');
			$table->decimal('price', 10, 2);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('options');
	}
}
