<?php

namespace App\Http\Requests;



use Illuminate\Foundation\Http\FormRequest;

class StoreCourseRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'code' => 'required|string|max:20|unique:courses',
            'name' => 'required|string|max:100',
            'department' => 'required|string|max:50',
            'credits' => 'required|integer|min:1|max:5',
            'teacher_id' => 'required|exists:users,id',
            'capacity' => 'required|integer|min:5|max:100'
        ];
    }
}

