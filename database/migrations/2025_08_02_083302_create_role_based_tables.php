<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/[timestamp]_create_role_based_tables.php

public function up()
{
    // Users table (extend if needed)
    Schema::table('users', function (Blueprint $table) {
        $table->string('phone')->nullable();
        $table->string('address')->nullable();
    });

    // Courses table
    Schema::create('courses', function (Blueprint $table) {
        $table->id();
        $table->string('code')->unique();
        $table->string('name');
        $table->string('department');
        $table->integer('credits');
        $table->foreignId('teacher_id')->constrained('users');
        $table->integer('capacity')->default(30);
        $table->timestamps();
    });

    // Enrollments table
    Schema::create('enrollments', function (Blueprint $table) {
        $table->id();
        $table->foreignId('student_id')->constrained('users');
        $table->foreignId('course_id')->constrained('courses');
        $table->date('enrollment_date');
        $table->string('status')->default('active');
        $table->timestamps();
    });

    // Assignments table
    Schema::create('assignments', function (Blueprint $table) {
        $table->id();
        $table->foreignId('course_id')->constrained('courses');
        $table->string('title');
        $table->text('description');
        $table->date('due_date');
        $table->integer('max_points');
        $table->timestamps();
    });

    // Grades table
    Schema::create('grades', function (Blueprint $table) {
        $table->id();
        $table->foreignId('assignment_id')->constrained('assignments');
        $table->foreignId('student_id')->constrained('users');
        $table->decimal('points_earned', 5, 2);
        $table->text('feedback')->nullable();
        $table->timestamps();
    });

    // Payments table
    Schema::create('payments', function (Blueprint $table) {
        $table->id();
        $table->foreignId('student_id')->constrained('users');
        $table->decimal('amount', 10, 2);
        $table->string('payment_method');
        $table->string('transaction_id')->nullable();
        $table->string('status')->default('pending');
        $table->text('notes')->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('role_based_tables');
    }
};
