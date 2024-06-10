<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('order_items')) {
            Schema::create('order_items', function (Blueprint $table) {
                $table->increments('id');
                $table->foreign('order_id')->references('id')->on('orders');
                $table->foreign('item_id')->references('id')->on('items');
                $table->timestamps();
            });
        }
    }
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
