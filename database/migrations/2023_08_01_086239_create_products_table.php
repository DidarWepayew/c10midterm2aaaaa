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
            $table->unsignedBigInteger('brand_id')->index();
            $table->foreign('brand_id')->references('id')->on('brands')->cascadeOnDelete();
            $table->unsignedBigInteger('category_id')->index();
            $table->foreign('category_id')->references('id')->on('categories')->cascadeOnDelete();
            $table->string('name_tm');
            $table->string('name_ru')->nullable();
            $table->string('name_en')->nullable();
            $table->string('image')->nullable();
            $table->boolean('language')->default(0);
            $table->text('description_tm');
            $table->text('description_ru')->nullable();
            $table->text('description_en')->nullable();
            $table->unsignedDouble('price')->default(0);
            $table->string('barcode')->nullable();
            $table->boolean('sold')->default(0);
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
