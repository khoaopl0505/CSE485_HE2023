<?php
require_once APP_ROOT.'/app/libs/DBConnection.php';
require_once APP_ROOT.'/app/models/Employee.php';
class EmployeeService{
   
    public static function getAllEmployees(){
        
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();
       
        $sql = "SELECT * FROM employees ";
        $stmt = $conn->query($sql);

      
        $employees = [];
        
        while($row=$stmt->fetch()){
            $employee = new Employee($row['employeeID'],$row['Name'],$row['Address'],$row['Salary']);
            $employees[] = $employee;
        }
        return $employees;
    }
}