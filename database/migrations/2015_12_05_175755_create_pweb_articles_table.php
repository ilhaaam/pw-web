<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePwebArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pweb_articles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('author');
            $table->string('title');
            $table->text('content');
            $table->enum('category', ['update', 'maintenance', 'event', 'contest', 'other', 'guide'])->default('other');
            $table->string('slug');
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
        Schema::drop('pweb_articles');
    }
}
