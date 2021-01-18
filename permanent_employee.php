<?php
//do not modify this file
class PermanentEmployees extends Employee
{
    protected $days_worked;
    protected $daily_wage;

    function __construct($name = null, $lastname = null, $cf = null, $empl_code = null, $days_worked = 0, $daily_wage = 0, $tot_wage = 0)
    {
        parent::__construct($name, $lastname, $cf, $empl_code, $tot_wage);
        $this->days_worked = $days_worked;
        $this->daily_wage = $daily_wage;
    }

    public function getDaysWorked()
    {
        return $this->days_worked;
    }

    public function setDaysWorked($days_worked)
    {
        $this->days_worked = $days_worked;
    }

    public function getDailyWage()
    {
        return $this->daily_wage;
    }

    public function setDailyWage($daily_wage)
    {
        $this->dai_wage = $daily_wage;
    }

    public function calculateWage()
    {
        $this->tot_wage = $this->getDaysWorked() * $this->getDailyWage();
        return $this->getDaysWorked() * $this->getDailyWage();

    }

    public function getEmployeeInfo()
    {
        return "Employee Code: " . $this->getEmployeeCode() . "<br>Daily Wage: " . $this->getDailyWage() . " Days Worked: " . $this->getDaysWorked() . "<br>Total Wage: " . $this->calculateWage(); 
    }
}