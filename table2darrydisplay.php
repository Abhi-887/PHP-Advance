<html>

<head>
    <title>
        2d array acheck
    </title>
</head>

<body>
    <table border="2">
        <tr>
            <td>Sno</td>
            <td>name</td>
            <td>email</td>
        </tr>
        <tr>
            <td>1</td>
            <td>rahul</td>
            <td>rahul@gmail.com</td>
        </tr>

        <tr>
            <td>1</td>
            <td>rahul</td>
            <td>rahul@gmail.com</td>
        </tr>

        <tr>
            <td>1</td>
            <td>rahul</td>
            <td>rahul@gmail.com</td>
        </tr>


    </table>
</body>

</html>


<?php

$users = [
    ['anil', 21, 'raj'],
    ['rahul', 22, 'test'],
    ['ok', 01, 'hello'],

];

echo "<table border='2' >";


for ($i = 0; $i < count($users); $i++) {
    echo "<tr>";
    for ($j = 0; $j < count($users[$i]); $j++) {
        echo "<td>";
        echo $users[$i][$j];

        echo "</td>";

    }
    echo "</tr>";
}

echo "</table>"


    ?>
