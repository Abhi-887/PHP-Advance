<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Button call back check</title>
</head>

<body>
    <form action="" method="post">
        <button value="btn" name="button">click me !!</button>
    </form>

</body>

</html>

<?php
if (isset($_REQUEST['button'])) {
    testbtn();
}
function testbtn()
{
    echo "hello ji ki haal chal";
}

?>
