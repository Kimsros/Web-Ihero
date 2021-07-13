<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('first_name');
            $table->text('last_name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('gender')->comment('1:Male,0:Female');
            $table->string('age');
            $table->string('phone');
            $table->bigInteger('position_id');
            $table->bigInteger('bank_id')->nullable();
            $table->text('address')->nullable();
            $table->bigInteger('staff_of_vender_id')->nullable();
            $table->string('identity_card')->nullable();
            $table->text('profile')->nullable();
            $table->text('description')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
