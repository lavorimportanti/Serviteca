<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Product;

class EmployeeApiController extends Controller
{
    public function index()
    {
        $employees = Employee::all();

        return $employees;
    }

    public function store(StoreProductRequest $request)
    {
        return Employee::create($request->all());
    }

    public function update(UpdateProductRequest $request, Employee $employees)
    {
        return $employees->update($request->all());
    }

    public function show(Employee $employees)
    {
        return $employees;
    }

    public function destroy(Employee $employees)
    {
        return $employees->delete();
    }
}
