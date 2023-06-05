<?php
namespace App\Interfaces;

Interface EmployeeRepositoryInterface {
    public function get(int $id);
    public function add(array $employeeDetails);
}
