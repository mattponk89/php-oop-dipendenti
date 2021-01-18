<?php

require_once('./person.php');
require_once('./employee.php');
require_once('./hourly_employees.php');
require_once('./employee_commission.php');
require_once('./permanent_employee.php');

$persona1 = new PermanentEmployees("Matteo","Ponchietti", "10101010", "CF1001", 20, 160);

$persona2 = new HourlyEmployees("Davide", "Bianchi", "11111111", "CD2002", 100, 10);

$persona3 = new EmployeesCommission("Paolo","Santo","22222222", "FF3003", "AirBnb Project", 1500);

echo $persona1->__toString() . "<br><br>";
echo $persona2->__toString() . "<br><br>";
echo $persona3->__toString() . "<br><br>";
?>