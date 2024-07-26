<?php

class Student
{
    protected const name = "Abhishek";
    function print()
    {
        echo Student::name;

        echo self::name;
    }
}

class teacher extends Student
{
    function hello()
    {
        echo self::name;
    }
}

$st1 = new Student;
$st1->print();

$v = new Teacher();

echo $v->hello();




?>
