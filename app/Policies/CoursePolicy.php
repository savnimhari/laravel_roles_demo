<?php

namespace App\Policies;



use App\Models\User;
use App\Models\Course;
use Illuminate\Auth\Access\HandlesAuthorization;

class CoursePolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return $user->hasAnyRole(['admin', 'teacher', 'registrar']);
    }

    public function view(User $user, Course $course)
    {
        return $user->hasRole('admin') || 
               ($user->hasRole('teacher') && $course->teacher_id == $user->id) ||
               $user->hasRole('registrar');
    }

    public function create(User $user)
    {
        return $user->hasAnyRole(['admin', 'registrar']);
    }

    public function update(User $user, Course $course)
    {
        return $user->hasRole('admin') || 
               ($user->hasRole('teacher') && $course->teacher_id == $user->id) ||
               $user->hasRole('registrar');
    }

    public function delete(User $user, Course $course)
    {
        return $user->hasRole('admin');
    }
}

