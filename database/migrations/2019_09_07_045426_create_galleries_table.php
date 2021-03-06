<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalleriesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('galleries', function (Blueprint $table) {
			$table->increments('id');
			$table->string('title');
			$table->string('slug')->unique();
			$table->text('seo')->nullable();
			$table->string('type')->nullable()->default('image');
			$table->string('link')->nullable();
			$table->text('description')->nullable();
			$table->text('images')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('galleries');
	}
}
