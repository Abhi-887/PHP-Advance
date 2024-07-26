<?php

$users = ['raj', 'rahul', 'ok', "ramesh", 'abhishek'];

//to add element in a array
array_push($users, 'rahul', 'mayank');

// to add multiple elements in to a arry


//to remove elemts in a array this will pop a single elemnt
array_pop($users);


//to remove multiple elements
array_splice($users, -2);


print_r($users);


?>
