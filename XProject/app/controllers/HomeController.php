<?php
include "app/repositories/EmployeesRepository.php";
class HomeController
{
    public function index(){
        $employeesRepoObj = new EmployeesRepository();
        $employees = $employeesRepoObj->getAllEmployees();
        include("app/views/listEmployees.php");
    }

    public function showEmployeeDetails($employeeId) {
        $employeeModel = new EmployeesRepository();
        $employee = $employeeModel->getEmployeeById($employeeId);
        include("app/views/employeeDetails.php");
    }
}