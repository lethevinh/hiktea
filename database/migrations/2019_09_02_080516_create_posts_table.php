<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('posts', function (Blueprint $table) {
			$table->increments('id');
			$table->string('title');
			$table->text('seo')->nullable();
			$table->string('slug')->unique();
			$table->text('description')->nullable();;
			$table->text('content')->nullable();
			$table->string('image')->nullable();
			$table->unsignedInteger('review_count')->default(0);
			$table->boolean('on_view')->default(true);
			$table->unsignedInteger('product_id')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('posts');
	}
}
