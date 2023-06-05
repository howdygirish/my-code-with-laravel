<?php

namespace App\Http\Controllers;

use App\Interfaces\EmployeeRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EmployeeController extends Controller
{
    private EmployeeRepositoryInterface $employeeRepository;

    public function __construct(EmployeeRepositoryInterface $employeeRepository)
    {
        $this->employeeRepository = $employeeRepository;
    }

    public function create()
    {
        return view('employee/create');
    }

    public function add(Request $request): JsonResponse
    {
        $employeeDetails = $request->only([
            'code',
            'email',
            'first_name',
            'last_name',
            'designation_id',
            'city_id'
        ]);
        return response()->json(
            [
                'data' => $this->employeeRepository->add($employeeDetails)
            ],
            Response::HTTP_CREATED
        );
    }

}
