<?php

use App\Employee;
use Illuminate\Database\Seeder;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employees = [[
            'id'             => 1,
            'name'           => 'Santiago Valencia Palacio',
            'email'          => 'sntgvlncplc@gmail.com',
            'document'       => '1036680267',
            'created_at'     => '2019-04-15 19:13:32',
            'updated_at'     => '2019-04-15 19:13:32',
            'deleted_at'     => null,
        ]];

        Employee::insert($employees);
    }
}
