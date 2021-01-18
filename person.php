<?php

//do not modify this file

class Person
{
    protected $name;
    protected $lastname;
    protected $fiscal_code;

    public function __construct($name = null, $lastname = null, $cf = null)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->fiscal_code = $cf;
    }

    public function __toString()
    {
        return $this->getPersonInfo();
    }

    public function getPersonInfo()
    {
        return "Info: " . $this->lastname . " " . $this->name . ". Fiscal Code: " . $this->fiscal_code . "<br>";
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getlastname()
    {
        return $this->lastname;
    }

    public function setlastname($lastname)
    {
        $this->lastname = $lastname;
    }

    public function getFiscalCode()
    {
        return $this->FiscalCode;
    }

    public function setFiscalCode($FiscalCode)
    {
        $this->FiscalCode = $FiscalCode;
    }
}
