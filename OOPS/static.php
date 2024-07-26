<?php
class Honda
{
    static public $rahul = "chela";
    static function car()
    {
        echo "hero";
    }
}

$v1 = new Honda();
$v1->car();


Honda::car();
// echo $v1->rahul; //this will not work if static keyword is used

echo Honda::$rahul;



?>
