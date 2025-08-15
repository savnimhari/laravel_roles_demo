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
    


    Schema::create('courses', function (Blueprint $table) {
        $table->id();
        $table->string('course_code')->unique();
        $table->string('course_name');
        $table->string('schedule');
        $table->integer('students')->default(0);
        $table->unsignedBigInteger('teacher_id');
        $table->timestamps();

        $table->foreign('teacher_id')->references('id')->on('users')->onDelete('cascade');
    });
}

    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
