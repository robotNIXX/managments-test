<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeesUpdateRequest extends FormRequest {
    public function authenticate() {
        return true;
    }

    public function rules() {
        return [
            'name' => 'required',
            'position' => 'required|exists:positions,id',
            'startDate' => 'required|date',
            'endDate' => 'required|date',
        ];
    }
}
