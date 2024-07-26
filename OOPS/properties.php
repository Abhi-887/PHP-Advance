<?php

class Properties
{

    public $name = "abhishek";
    function displayname()
    {
        echo $this->name;
    }

    function updatename($name)
    {
        $this->name = $name;
    }
}

$v1 = new Properties();
echo $v1->updatename("bhist5");
echo $v1->displayname();





?>