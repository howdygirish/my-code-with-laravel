<?php
namespace App\Repositories;

use App\Interfaces\EmployeeRepositoryInterface;
use App\Models\Employee;

class EmployeeRepository implements EmployeeRepositoryInterface
{

    public function add(array $employeeDetails)
    {
        return Employee::create($employeeDetails);
    }

    public function get($id)
    {
        //
    }
}
