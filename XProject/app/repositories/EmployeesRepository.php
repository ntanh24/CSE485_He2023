<?php
include "app/models/Employees.php";
class EmployeesRepository{
    public function getAllEmployees(){
        try {
            $conn = new PDO("mysql:host=localhost;dbname=xproject", 'root', '244');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "SELECT * FROM employees";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            $stmt->setFetchMode(PDO::FETCH_ASSOC);

            $result = $stmt->fetchAll();

            $employees = [];
            foreach($result as $row){
                $employee = new Employees($row['employees_id'], $row['fullname'], $row['address'],$row['salary']);
                array_push($employees, $employee);
            }
            $conn = null;
            return $employees;
        } catch(PDOException $e) {
            return null;
        }
    }

    public function getEmployeeById($employeeId) {
        try {
            $conn = new PDO("mysql:host=localhost;dbname=xproject", 'root', '244');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $employeeId  = 1;

            $sql = "SELECT * FROM employees WHERE employees_id = :id";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(":id", $employeeId , PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($result) {
                print_r($result);
            } else {
                echo "Không tìm thấy nhân viên.";
            }
            $conn = null;
        } catch(PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
        }
    }
}