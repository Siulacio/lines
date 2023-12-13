<?php

namespace App\Http\Controllers;


use App\Models\Employee;
use App\Http\Requests\SaveEmployeeRequest;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
    }

    public function index()
    {
        $employees = Employee::get();

        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        return view('employees.create', ['employee'=> new Employee]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SaveEmployeeRequest $request)
    {

        Employee::create($request->validated());

        return to_route('employees.index')->with('status', 'User created successfully!');

    }


    public function show(Employee $employee)
    {
        //
    }


    public function edit(Employee $employee)
    {
        return view('employees.edit', ['employee'=> $employee]);
    }


    public function update(SaveEmployeeRequest $request, Employee $employee)
    {

        $employee->update($request->validated());

        return to_route('employees.index')->with('status', 'User updated successfully!');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();

        return to_route('employees.index')->with('status', 'User deleted successfully!');

    }
}
