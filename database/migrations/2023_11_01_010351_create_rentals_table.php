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
    Schema::create('rentals', function (Blueprint $table) {
        $table->id();
        $table->string('student_email');
        $table->string('student_name');
        $table->unsignedBigInteger('item_id');
        $table->unsignedBigInteger('location_id');
        $table->datetime('rented_at');
        $table->datetime('returned_at')->nullable();
        $table->timestamps();
        
        // Foreign key definitions
        $table->foreign('item_id')->references('id')->on('items'); // Assuming you have an items table
        $table->foreign('location_id')->references('id')->on('locations');
    });
}

public function down(): void
{
    Schema::dropIfExists('rentals');
}

};
