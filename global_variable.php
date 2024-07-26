<?php
//global variable
$name = 'raju';

echo $name;

//local variable those are inside a function
echo "<br>";
function test()
{
    $name = 'ram';

    global $name;  //now it will use global variable
    echo $name;

    //nested funtion
    function nested()
    {

        global $name;
        $name = "abhishek";


        echo $name;
    }
}

test();

echo "<br>";

nested();
echo "<br>";
echo $name;


?>
