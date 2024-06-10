<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('users')) {
            Schema::create('users', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name', 255);
                $table->string('telegram', 255)->nullable();
                $table->string('login', 255)->unique();
                $table->string('password', 255);
                $table->boolean('is_admin')->default(false);
                $table->timestamps();
            });
        }
    }
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
