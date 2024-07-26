<?php
//final class cant be inheritted


class Honda
{
    final function car()
    {
        echo "honda";
    }
}

class Car extends Honda
{
    //cant override this
    function car2()
    {
        echo ('ok');
    }

}

$car = new Car;
$car->car();
?>
