<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('street_address')->nullable();
            $table->integer('city_id')->default('1')->nullable()->unsigned()->index();
            $table->foreign('city_id')->references('id')->on('cities')->onUpdate('cascade')->onDelete('set null');

            $table->double('latitude')->default('30.66667');
            $table->double('longitude')->default('-7.5');
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
        Schema::dropIfExists('addresses');
    }
}
