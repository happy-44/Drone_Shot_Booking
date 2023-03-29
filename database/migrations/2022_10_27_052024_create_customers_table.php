<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id('customer_id');
            $table->string('name', 50);
            $table->string('email', 100);
            $table->string('password', 20)->nullable();
            $table->string('confirm_password', 20)->nullable();
            $table->string('country',50)->nullable();
            $table->string('state',50)->nullable();
            $table->text('address');
            $table->string('gender');
            $table->date('dob')->nullable();
            $table->boolean('status')->default(1);
            $table->integer('points')->default(0);
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
        Schema::dropIfExists('customers');
    }
}
