<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('cat_id');
            $table->unsignedBigInteger('sub_cat_id');
            $table->unsignedBigInteger('brand_id');
            $table->string('product_name');
            $table->string('slug')->unique();
            $table->string('model')->nullable();
            $table->string('color');
            $table->string('size');
            $table->decimal('buying_price','10','2');
            $table->decimal('selling_price','10','2');
            $table->decimal('special_price','10','2')->nullable();
            $table->date('special_start')->nullable();
            $table->date('special_end')->nullable();
            $table->integer('quantity');
            $table->tinyInteger('warranty')->default('0');
            $table->string('warranty_duration')->nullable();
            $table->longText('warranty_condition')->nullable();
            $table->string('video_url')->nullable();
            $table->string('image');
            $table->string('galleary')->nullable();
            $table->longText('description');
            $table->longText('long_description')->nullable();
            $table->enum('status',['1','0'])->default('1');
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
        Schema::dropIfExists('products');
    }
}
