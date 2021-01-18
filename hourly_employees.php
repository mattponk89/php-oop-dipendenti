<?php
//do not modify this file
class HourlyEmployees extends Employee
{
    protected $hours_worked;
    protected $hourly_wage;

    function __construct($name = null, $lastname = null, $cf = null, $empl_code = null, $hours_worked = 0, $hourly_wage =0, $tot_wage = 0)
    {
        parent::__construct($name, $lastname, $cf, $empl_code, $tot_wage);
        $this->hours_worked = $hours_worked;
        $this->hourly_wage = $hourly_wage;
    }

    public function getHoursWorked()
    {
        return $this->hours_worked;
    }

    public function setHoursWorked($h_worked)
    {
        $this->hours_worked = $h_worked;
    }

    public function gethourlyWage()
    {
        return $this->hourly_wage;
    }

    public function setHourlyWage($hourly_wage)
    {
        $this->hourly_wage = $hourly_wage;
    }

    public function calculateWage()
    {
        $this->tot_wage = $this->getHoursWorked() * $this->getHourlyWage();
        return $this->getHoursWorked() * $this->getHourlyWage();
    }

    public function getEmployeeInfo()
    {
        return "Employee Code: " . $this->getEmployeeCode() . "<br>Hourly Wage: " . $this->getHourlyWage() . " Hours Worked: " . $this->getHoursWorked() . "<br> Total Wage: " . $this->calculateWage(); 
    }
}
