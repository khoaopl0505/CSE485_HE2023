<?php
class Employee{
    private $employeeID;
    private $Name;
    private $Address;
    private $Salary;
    


    public function __construct($employeeID, $Name, $Address, $Salary){
        $this->employeeID       =$employeeID;
        $this->Name    =$Name;
        $this->Address  =$Address;
        $this->Salary  =$Salary;

    }

    public function getemployeeID(){
        return $this->employeeID;
    }

    public function setemployeeID($employeeID){
        $this->employeeID=$employeeID;
    }

    public function getName (){
        return $this->Name;
    }

    public function setName ($Name ){
        $this->Name =$Name ;
    }public function getAddress(){
        return $this->Address;
    }

    public function setAddress($Address){
        $this->Address=$Address;
    }
    public function getSalary(){
        return $this->Salary;
    }

    public function setSalary($Salary){
        $this->Salary = $Salary;
    }
}