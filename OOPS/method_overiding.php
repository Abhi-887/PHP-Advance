<?php

class Teacher
{
    // this is property

    public $city = "Delhi";
    function nextexam()
    {
        echo "next exam is maths";
    }

    function age()
    {
        echo "my age is 40";
    }
}

class Student extends Teacher
{
    public $city = "mumbai";
    //this is method overiding
    function age()
    {
        echo "my age is 20";
    }
}


$st1 = new Student();
echo $st1->city;

$st1->nextexam();

$st1->age();

$st2 = new Teacher();
$st2->age();
echo $st2->city;


?>
