<?php

class UserAuth
{
  function login($name)
  {
    echo $name . " login !!";
  }

}

class student extends UserAuth
{

}

class teacher extends UserAuth
{

}

$v = new student();
$v->login("suresh");

?>
