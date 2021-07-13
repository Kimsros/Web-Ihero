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
            $table->id();
            $table->text('name');
            $table->double('qty');
            $table->double('price_in');
            $table->double('price_out');
            $table->bigInteger('product_attribute_id');
            $table->bigInteger('vender_id');
            $table->integer('product_low_quatity');
            $table->date('product_expire_date');
            $table->bigInteger('categories_id');
            $table->bigInteger('updated_by');
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
