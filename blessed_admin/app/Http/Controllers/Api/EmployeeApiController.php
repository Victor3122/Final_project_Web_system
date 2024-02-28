<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeApiController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return $employees;
    }

    public function show($id)
    {
        $employee = Employee::findOrFail($id);
        return $employee;
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:employees',
            'date_of_birth' => 'required|date',
        ]);

        $employee = Employee::create($request->all());
        return $employee;
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'string',
            'email' => 'email|unique:employees,email,'.$id,
            'date_of_birth' => 'date',
        ]);

        $employee = Employee::findOrFail($id);
        $employee->update($request->all());
        return $employee;
    }

    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();
        return response()->json(['message' => 'Employee deleted successfully']);
    }
}
