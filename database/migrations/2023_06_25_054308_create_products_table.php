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
            $table->increments('id');

            $table->integer('productCategory_id')->unsigned();
            $table->integer('faceCategory_id')->unsigned();
            $table->foreign('productCategory_id')->references('id')->on('product_categories');
            $table->foreign('faceCategory_id')->references('id')->on('face_categories');

            $table->string('name');
            $table->string('intro');
            $table->integer('price');
            $table->integer('commandAmount');
            $table->integer('likeyAmount');

            $table->integer('brand_id')->unsigned();
            $table->foreign('brand_id')->references('id')->on('brands');

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
