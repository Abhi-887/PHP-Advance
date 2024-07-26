<?php

// print_r($_FILES['upload']);
// echo "<br>";
if ($_FILES['upload']) {
    $path = $_FILES['upload']['name'];
    // echo $path;

    $uplaod_path = "./uploads/" . $path;
    // echo $uplaod_path;

    if (move_uploaded_file($_FILES['upload']['tmp_name'], $uplaod_path)) {
        echo "upload done";
    } else {
        echo "failed";
    }
}

?>
