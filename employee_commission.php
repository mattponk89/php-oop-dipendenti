<?php
//do not modify this file
require_once('./project.php');
class EmployeesCommission extends Employee
{
    use ProjectTrait;

    function __construct($name = null, $lastname = null, $cf = null, $empl_code = null, $prj_name = Null , $prj_price = Null , $tot_wage = 0)
    {
        parent::__construct($name, $lastname, $cf, $empl_code, $tot_wage);
        $this->project_name = $prj_name;
        $this->project_price = $prj_price;
    }


    public function calculateWage()
    {
        $this->tot_wage = $this->getProjectPrice();
        return $this->getProjectPrice();
    }

    public function getEmployeeInfo()
    {
        return "Employee Code: " . $this->getEmployeeCode() . "<br>Project Name: " . $this->getProjectName() . "<br>Total Wage: " . $this->calculateWage();
    }
}
