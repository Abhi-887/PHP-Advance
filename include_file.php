<?php

include ("./global_variable.php");

for ($i = 0; $i < 10; $i++) {
    include_once ("./array.php"); // this will prvents agian and again calling of an same file
}


require ("./2darray.php"); //it require correct name else give fatal error
// Fatal error: Uncaught Error: Failed opening required './2darray1.php'

require_once ('./Castinginphp.php');
//same as inculde once but give fatal error and also fatal erroe are not getting save at production :-)



?>
