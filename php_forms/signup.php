<?php

print_r($_POST);
echo "<br>";
if ($_POST) {
    echo $_POST['user_name'];
    echo $_POST['user_pass'];
}

?>
