<?php

// to convert from one datatype to another .

//int to string
$a = 2;
$a = (string) $a;

//string to integer
$b = "hello";
$b = (int) $b;

//int to boolean
$c = 152;
$c = (boolean) $c;


//boolean to int
$d = 0;
$d = (int) $d;

//float to int
$e = 1.1;
$e = (int) $e;

//string to array

$f = ("rahul54");
$f = (array) $f;


// arry to string this whill throgh an error
$g = ['okj', 'manoj'];

$g = (string) $g;

/*Warning: Array to string conversion in

  string(5) "Array" */



echo "<pre>";
var_dump([$a, $b, $c, $d, $e, $f, $g]);
echo "</pre>";
?>
