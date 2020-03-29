<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOwneredShopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ownered_shop', function (Blueprint $table) {
            $table->integer('shop_id')
                  ->unsigned();

            $table->foreign('shop_id')
                  ->references('id')
                  ->on('shops')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');

                  
            $table->integer('owner_id')
                  ->unsigned();

            $table->foreign('owner_id')
                  ->references('id')
                  ->on('users')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');

            $table->primary(['shop_id', 'owner_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ownered_shop');
    }
}
