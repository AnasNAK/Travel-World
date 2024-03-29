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
        schema::disableForeignKeyConstraints();
        Schema::create('adventures', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('advice');
            $table->longText('description');
            $table->foreignId('destination_id')->constrained('destinations');
            $table->timestamps();
        });
    }

    /** 
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adventures');
    }
};
