<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('allarticles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image');
            $table->text('intro');
            $table->string('resources');
            $table->string('writer');
            $table->dateTime('date');
            $table->longText('body');
            $table->integer('view')->default(0);
            $table->integer('likes')->default(0);
            $table->boolean('activity')->default(0);
            $table->string('userip', 255);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('allarticles');
    }
};
