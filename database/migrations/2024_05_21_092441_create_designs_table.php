<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        if (!Schema::hasTable('designs')) {
            Schema::create('designs', function (Blueprint $table) {
                $table->increments('id');
                $table->foreign('user_id')->references('id')->on('users');
                $table->unsignedInteger('item');
                $table->string('gender', 50);
                $table->string('size', 50);
                $table->text('design_description');
                $table->string('reference', 255);
                $table->boolean('is_design');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('designs');
    }
};
