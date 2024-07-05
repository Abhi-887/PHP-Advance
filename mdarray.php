<?php

$users = [
    ['name' => 'anil', 'age' => 21, "city" => 'gurgram'],
    ['name' => 'rahul', 'age' => 25, "city" => 'delhi'],
    ['name' => 'raj', 'age' => 40, "city" => 'noida'],


];
echo "<table border='2'>";
echo "<tr>";
foreach ($users as $user) {
    echo "<tr>";
    foreach ($user as $j => $i) {
        echo "<td>";
        echo $j . " is " . $i;
        echo "<br>";
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";




?>
