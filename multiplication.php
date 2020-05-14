<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Challenge: using loops</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Multiplication Table</h1>
<table>

<?php
$limit = 12;
$numbers = [1,2,3,4,5,6,7,8,9,10,11,12];
$num_count = count($numbers);

//creating the table head
echo '<tr>';
echo '<th>&nbsp;</th>';
    for($col = 1; $col <= $num_count; $col++):
        $currentNumber = $numbers[$col];
        echo "<th>$col</th>";
    endfor;
echo '</tr>';

for ($y = 1; $y <= $limit; $y++):
    echo '<tr>';
    echo "<th> {$y} </th>";
    for($currentPosition = 1; $currentPosition <= 
    $limit; $currentPosition++) {
        $result = $y * $currentPosition;
        echo "<td>{$result}</td>"; 
    }   
    echo '</tr>';
   
endfor;

?>

</table>
</body>
</html>