<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEcommerceTables extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {

       Schema::create('products', function (Blueprint $table) {
           $table->increments('id');
           $table->string('slug')->nullable();
           $table->boolean('ispromo');
           $table->boolean('is_published');
           $table->string('name')->nullable();
           $table->string('manufacturer')->default('The Grace Company');
           $table->decimal('price', 11 ,2)->nullable();
           $table->longText('details');
           $table->text('short');
           $table->text('description');
           $table->string('sku', 5)->nullable();
           $table->string('upc', 12)->nullable();
           $table->integer('quantity')->unsigned()->default('00');
           $table->string('status')->nullable();
           $table->string('thumbnail')->nullable();
           $table->string('photo_album')->nullable();
           $table->dateTime('pubished_at')->index();
           $table->string('video_url')->nullable();
           $table->string('lang', 255);
           $table->timestamps();
           $table->softDeletes();
           $table->engine = 'InnoDB';
       });


		Schema::create('sections', function (Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('slug')->nullable();
			$table->string('lang', 255)->nullable();

			$table->timestamps();
		});


		Schema::create('categories', function (Blueprint $table)
		{
			$table->increments('id');
			$table->unsignedInteger('section_id');
			$table->string('title');
			$table->string('name')->nullable();
			$table->text('meta_description')->nullable();
			$table->string('slug')->nullable();
			$table->string('lang', 20)->nullable();

			$table->timestamps();
			$table->foreign('section_id')->references('id')->on('sections')->onUpdate('cascade')->onDelete('cascade');

		});



		Schema::create('product_variants', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('product_id')->unsigned()->index();
			$table->string('attribute_name');
			$table->text('product_attribute_value');
			$table->timestamps();
			$table->softDeletes();
			$table->engine = 'InnoDB';
		});

		Schema::create('product_features', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('product_id')->unsigned()->index();
			$table->string('feature_name');
			$table->boolean('useicon')->default(1);
			$table->string('icon')->default('icon-caret-right');

			$table->timestamps();
			$table->engine = 'InnoDB';
		});

		Schema::create('options', function (Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('product_id');
			$table->string('name');
			$table->timestamps();

			$table->foreign('product_id')->references('id')->on('products')->onUpdate('cascade')->onDelete('cascade');
		});

		Schema::create('option_values', function (Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('option_id');
			$table->string('value');
			$table->timestamps();

			$table->foreign('option_id')->references('id')->on('options')->onUpdate('cascade')->onDelete('cascade');
		});







		Schema::create('sub_categories', function (Blueprint $table)
       {
           $table->increments('id');
           $table->string('name');
           $table->string('description');
           $table->string('parent');
           $table->timestamps();
           $table->engine = 'InnoDB';
       });

       Schema::create('category_product', function (Blueprint $table)
       {
           $table->unsignedInteger('category_id');
           $table->unsignedInteger('product_id');
           $table->timestamps();

           $table->primary(['category_id', 'product_id']);
           $table->foreign('category_id')->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade');
           $table->foreign('product_id')->references('id')->on('products')->onUpdate('cascade')->onDelete('cascade');

           $table->engine = 'InnoDB';

       });

       Schema::create('product_album', function (Blueprint $table)
       {
           $table->increments('id');
           $table->unsignedInteger('product_id');
           $table->string('photo_src');
           $table->timestamps();

           $table->foreign('product_id')->references('id')->on('products')->onUpdate('cascade')->onDelete('cascade');
           $table->engine = 'InnoDB';
       });

		Schema::create('reviews', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('product_id');
			$table->string('name');
			$table->string('email');
			$table->string('review');
			$table->rememberToken();
			$table->timestamps();
			$table->engine = 'InnoDB';
		});

    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
       Schema::drop('products');
		Schema::drop('product_variants');
		Schema::drop('product_features');
		Schema::drop('option_values');
		Schema::drop('options');
        Schema::drop('sections');
        Schema::drop('categories');
       Schema::drop('sub_categories');


       Schema::drop('category_product');
       Schema::drop('product_album');
		Schema::drop('reviews');


    }
}
