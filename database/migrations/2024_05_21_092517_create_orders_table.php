<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('orders')) {
            Schema::create('orders', function (Blueprint $table) {
                $table->increments('id');
                $table->foreign('user_id')->references('id')->on('users');
                $table->text('address');
                $table->string('card', 255);
                $table->decimal('total_price', 10, 2);
                $table->string('status', 50);
                $table->timestamps();
            });
        }
    }
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
