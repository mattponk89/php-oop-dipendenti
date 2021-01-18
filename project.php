<?php

trait ProjectTrait
{
    public $project_name;
    public $project_price;

    public function getProjectName()
    {
        return $this->project_name;
    }

    public function setProjectName($prj_name)
    {
        $this->project_name = $prj_name;
    }
    public function getProjectPrice()
    {
        return $this->project_price;
    }

    public function setProjectPrice($prj_price)
    {
        $this->project_price = $prj_price;
    }
}

?>