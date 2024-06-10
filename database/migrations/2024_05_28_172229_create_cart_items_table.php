<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('cart_items')) {
            Schema::create('cart_items', function (Blueprint $table) {
                $table->increments('id');
                $table->foreign('cart_id')->references('id')->on('carts');
                $table->foreign('item_id')->references('id')->on('items');
                $table->timestamps();
            });
        }
    }
    public function down(): void
    {
        Schema::dropIfExists('cart_items');
    }
};
