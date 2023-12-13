<?php

namespace App\Http\Controllers;


use App\Models\Employee;
use App\Http\Requests\SaveEmployeeRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
    }

    public function index(): View
    {
        $employees = Employee::get();

        return view('employees.index', compact('employees'));
    }

    public function create(): View
    {
        return view('employees.create', ['employee'=> new Employee]);
    }

    public function store(SaveEmployeeRequest $request): RedirectResponse
    {

        Employee::create($request->validated());

        return to_route('employees.index')
            ->with('status', 'User created successfully!');
    }


    public function show(Employee $employee)
    {
        //
    }


    public function edit(Employee $employee): View
    {
        return view('employees.edit', ['employee'=> $employee]);
    }


    public function update(SaveEmployeeRequest $request, Employee $employee): RedirectResponse
    {
        $employee->update($request->validated());

        return to_route('employees.index')
            ->with('status', 'User updated successfully!');
    }

    public function destroy(Employee $employee): RedirectResponse
    {
        $employee->delete();

        return to_route('employees.index')
            ->with('status', 'User deleted successfully!');
    }

}
