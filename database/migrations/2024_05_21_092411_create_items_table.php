<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('items')) {
            Schema::create('items', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name', 255);
                $table->string('photo', 255);
                $table->string('gender', 50);
                $table->string('size', 50);
                $table->text('description');
                $table->decimal('price', 10, 2);
                $table->string('status', 50);
                $table->timestamps();
            });
        }
    }
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
