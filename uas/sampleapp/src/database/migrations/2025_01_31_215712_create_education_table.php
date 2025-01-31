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
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            $table->string('technology_name');
            $table->string('category'); 
            $table->text('description');
            $table->string('implemented_by'); 
            $table->date('implemented_since')->nullable();
            $table->string('location'); 
            $table->text('benefits');
            $table->text('challenges');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education');
    }
};
