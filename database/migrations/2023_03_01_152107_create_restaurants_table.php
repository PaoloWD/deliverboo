<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image')->nullable();
            $table->string('vat');
            $table->string('address');
            $table->timestamps();
        });

        Schema::table('dishes', function (Blueprint $table) {
            $table->unsignedBigInteger("restaurants_id")->nullable();
            $table->foreign("restaurants_id")
                ->references("id")
                ->on("restaurants");
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurants');
    }
};