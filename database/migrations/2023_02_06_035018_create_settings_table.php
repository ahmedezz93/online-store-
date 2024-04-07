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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('default_locale')->nullable();
            $table->string('default_timezone')->nullable();
            $table->string('reviews_enabled')->nullable();
            $table->string('auto_approve_reviews')->nullable();
            $table->string('supported_currencies')->nullable();
            $table->string('default_currency')->nullable();
            $table->string('store_email')->nullable();
            $table->string('search_engine')->nullable();
            $table->string('local_shipping_cost')->nullable();
            $table->string('outer_shipping_cost')->nullable();
            $table->string('free_shipping_cost')->nullable();
            $table->string('free_shipping_label')->nullable();
            $table->string('local_label')->nullable();
            $table->string('outer_label')->nullable();
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
        Schema::dropIfExists('settings');
    }
};
