<?php
//do not modify this file
class Employee extends Person{
    protected $employee_code;
    protected $tot_wage;

    function __construct($name = null, $lastname = null, $cf = null, $empl_code = null, $tot_wage = 0)
    {
        parent::__construct($name, $lastname, $cf);
        $this->employee_code = $empl_code;
        $this->wage = $tot_wage;
    }

    public function getEmployeeCode()
    {
        return $this->employee_code;
    }

    public function setEmployeeCode($emp_code)
    {
        $this->employee_code = $emp_code;
    }

    public function getTotWage()
    {
        return $this->tot_wage;
    }

    public function getEmployeeInfo()
    {
        return "Employee Code: " . $this->getEmployeeCode() . " Total Wage: " . $this->getTotWage();
    }
    public function __toString()
    {
        return $this->getPersonInfo() . " " . $this->getEmployeeInfo();
    }
}
