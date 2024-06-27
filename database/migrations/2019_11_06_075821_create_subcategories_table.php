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
        Schema::create('subcategories', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->string('name');
            $table->string('slug');
<<<<<<< HEAD:database/migrations/2019_11_06_075821_create_subcategories_table.php
         
            $table->boolean('status')->default(true);
            $table->softDeletes();
=======
            $table->string('status');
            $table->string('deleted_at');
>>>>>>> 2178b20738ad0cab03d2d2d08311d4cf598ffd97:database/migrations/2020_02_22_195135_create_subcategories_table.php
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subcategories');
    }
};
