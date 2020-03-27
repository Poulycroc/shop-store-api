<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategorizedProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorized_product', function (Blueprint $table) {
            $table->integer('category_id')
                  ->unsigned();

            $table->foreign('category_id')
                  ->references('id')
                  ->on('categories')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');

                  
            $table->integer('product_id')
                  ->unsigned();

            $table->foreign('product_id')
                  ->references('id')
                  ->on('products')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');

            $table->primary(['category_id', 'product_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorized_product');
    }
}
