<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->bigInteger('subcategory_id')->unsigned()->nullable();
            $table->foreign('subcategory_id')->references('id')->on('subcategories')->onDelete('cascade');
            //vendor id
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('brand_id')->nullable();
            $table->string('product_name');
            $table->string('product_code');
            $table->string('product_quantity'); 
            $table->text('product_details');
            $table->string('product_color');
            $table->string('product_size');
            $table->string('selling_price');
            $table->string('discount_price')->nullable();
            $table->string('video_link')->nullable();
            $table->integer('main_slider')->nullable();
            $table->integer('hot_deal')->nullable();
            $table->integer('best_rated')->nullable();
            $table->integer('mid_slider')->nullable();
            $table->integer('hot_new')->nullable();
            $table->integer('trend')->nullable();
            $table->integer('status')->nullable();
            $table->timestamps();
          
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
