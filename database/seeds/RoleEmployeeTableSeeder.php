<?php

use App\Employee;
use Illuminate\Database\Seeder;


class RoleEmployeeTableSeeder extends Seeder
{

    public function run()
    {
        Employee::findOrFail(1)->roles()->sync(1);
    }
}
