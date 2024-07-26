<?php

print_r($_REQUEST);

if ($_REQUEST) {
    echo $_REQUEST['user_name'];
}

echo "<br>";
echo "<br>";
foreach ($_REQUEST as $key => $data) {

    echo $key . " is " . $data;
    echo "<br>";
}



?>
