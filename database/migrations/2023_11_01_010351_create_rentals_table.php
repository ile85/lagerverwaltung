<?php
use Illuminate\Support\Facades\DB;
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
        $table->datetime('returned_at')->nullable();
        $table->timestamps();
        $table->datetime('rented_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        
        // Foreign key definitions
        $table->foreign('item_id')->references('id')->on('items'); // Assuming you have an items table
        $table->foreign('location_id')->references('id')->on('locations');
        $table->foreignId('user_id')->nullable()->constrained();
    });
}

public function down(): void
{
    Schema::dropIfExists('rentals');
}

};
