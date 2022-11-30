<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('product_product_category', function (Blueprint $table) {
            $table->integer('product_id')->unsigned()->index();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->integer('product_category_id')->unsigned()->index();
            $table->foreign('product_category_id')->references('id')->on('product_category')->onDelete('cascade');
            $table->primary(['product_id', 'product_category_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_product_category');
    }
};
