<?php
require_once APP_ROOT.'/app/services/EmployeeService.php';
class HomeController{
    // Chua cac phuong thuc xu ly loi goi
    public function index(){
        // Lay du lieu CAN tu service tuong ung
        $employeeService = new EmployeeService();
        $data = $employeeService->getAllEmployees();
        $employees = EmployeeService::getAllEmployees();

        // Render ra view
        include APP_ROOT.'/app/views/home/index.php';
    }
}