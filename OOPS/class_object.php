<?php
class Maths
{
    function add($a, $b)
    {
        echo $a + $b;
    }

    function sub($d, $f)
    {
        return $d - $f;
    }
}
$maths = new Maths();

$tests = new Maths();

$maths->add(4, 5);

echo "<br>";

echo $tests->sub(4, 50);



?>