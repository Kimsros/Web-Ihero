<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestTransetionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_transections', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_id');
            $table->double('qty');
            $table->date('datetime');
            $table->bigInteger('request_by_id');
            $table->bigInteger('restuarant_id');
            $table->text('description')->nullable();
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
        Schema::dropIfExists('request__transetions');
    }
}
