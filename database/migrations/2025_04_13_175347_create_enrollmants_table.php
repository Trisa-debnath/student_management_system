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
        Schema::create('enrollmants', function (Blueprint $table) {
            $table->id();
            $table->string('enroll_no');
            $table->unsignedBigInteger('batches_id');
            $table->unsignedBigInteger('student_id');
            $table->date('join_date');
            $table->double('fee');
            $table->foreign('batches_id')->references('id')->on('batches')->onDelete('cascade');
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrollmants');
    }
};
