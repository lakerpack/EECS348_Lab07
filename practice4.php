<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Practice Four</title>
</head>
<body>
    <?php 
    $num = isset($_POST['num']) ? intval($_POST['num']) : 0;
    echo "<table border =\"1\">"; 
    for ($row = 0; $row <= $num; $row++) {
        echo "<tr> \n";
        for ($col = 0; $col <= $num; $col++) {
            if($row == 0 && $col == 0)
                echo '<td> </td>';
            else if ($row == 0 && $col != 0)
                echo "<td>$col</td>";
            else if ($row != 0 && $col == 0)
                echo "<td>$row</td>";
            else {
                $p = $col * $row;
                echo "<td>$p</td> \n";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>