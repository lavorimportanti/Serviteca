<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyProductRequest;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Employee;

class EmployeesController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('employee_access'), 403);

        $employees = Employee::all();

        return view('admin.employees.index', compact('employees'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('employee_create'), 403);

        return view('admin.employees.create');
    }

    public function store(StoreProductRequest $request)
    {
        abort_unless(\Gate::allows('employee_create'), 403);

        $employee = Employee::create($request->all());

        return redirect()->route('admin.employees.index');
    }


    public function edit(Employee $employee)
    {
        abort_unless(\Gate::allows('employee_edit'), 403);

        return view('admin.employees.edit', compact('employee'));
    }

    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        abort_unless(\Gate::allows('employee_edit'), 403);

        $employee->update($request->all());

        return redirect()->route('admin.employees.index');
    }

    public function show(Employee $employee)
    {
        abort_unless(\Gate::allows('employee_show'), 403);

        return view('admin.employees.show', compact('employee'));
    }

    public function destroy(Employee $employee)
    {
        abort_unless(\Gate::allows('employee_delete'), 403);

        $employee->delete();

        return back();
    }

    public function massDestroy(MassDestroyEmployeeRequest $request)
    {
        Employee::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
