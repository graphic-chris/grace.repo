<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFaqsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('faqs', function (Blueprint $table) {

            $table->increments('id');
            $table->string('question');
            $table->text('answer');
            $table->integer('order');
            $table->string('lang', 20);
            $table->string('path', 255)->nullable();
            $table->string('file_name', 255)->nullable();
            $table->unsignedInteger('file_size')->nullable();

            $table->unsignedInteger('answered_by')->nullable();
            $table->unsignedInteger('asked_by')->nullable();
            $table->boolean('is_published')->default(true);
            $table->timestamp('published_at');
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('faqs');
    }
}
