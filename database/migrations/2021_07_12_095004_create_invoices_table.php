<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('buyer_user_id');
            $table->bigInteger('delivery_user_id');
            $table->bigInteger('product_attribute_id');
            $table->bigInteger('vender_user_id');
            $table->text('invoice_number_by_vender');
            $table->boolean('is_delivery_acept_invoice')->default(0);
            $table->boolean('is_vender_acept_invoice')->default(0);
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
        Schema::dropIfExists('invoices');
    }
}
