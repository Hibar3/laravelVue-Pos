<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('oid');
            $table->string('reference_no');
            $table->integer('tax');
            $table->integer('service_charge');
            $table->integer('toatal_amount_cents');
            $table->boolean('is_walkin');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
