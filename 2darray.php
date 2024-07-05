<?php

$users = [
    ['anil', 21, 'raj'],
    ['rahul', 22, 'test'],
    ['ok', 01, 'hello']

];

echo "<pre>";
print_r($users);
echo "<pre>";

for ($i = 0; $i < count($users); $i++) {
    for ($j = 0; $j < count($users[$i]); $j++) {
        echo $users[$i][$j];
        echo "</br>";
    }

}

?>
