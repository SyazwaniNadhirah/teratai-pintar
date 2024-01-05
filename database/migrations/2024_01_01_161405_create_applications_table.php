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
        Schema::create('applications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->foreignId('program_id')->nullable();
            $table->foreignId('class_id')->nullable();
            $table->foreignId('activity_id')->nullable();
            $table->string('year_intake')->nullable();
            $table->enum('status',['Pending','Approved','Rejected'])
            ->default('Pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
