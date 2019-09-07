<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('branches', function (Blueprint $table) {
			$table->increments('id');
			$table->string('title');
			$table->string('slug')->nullable()->unique();
			$table->text('description')->nullable();
			$table->text('content')->nullable();
			$table->text('images')->nullable();
			$table->string('address')->nullable();
			$table->string('phone')->nullable();
			$table->string('lat')->nullable();
			$table->string('lng')->nullable();
			$table->boolean('active')->default(true);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('branches');
	}
}
