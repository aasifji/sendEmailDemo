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
    Schema::create('customers', function (Blueprint $table) {
        $table->id(); // Creates an 'id' column as primary key (default)
        $table->string('name', 60);
        $table->string('email', 100);
        $table->enum('gender', ['M', 'F', 'O'])->nullable();
        $table->text('address')->nullable();
        $table->date('dob')->nullable();
        $table->string('password');
        $table->boolean('status')->default(1);
        $table->integer('points')->default(0);
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
