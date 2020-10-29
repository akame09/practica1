
<?php

    echo "<table border='1'>";
    $n;
    echo "<tr>";

    for ($n=1; $n < 170; $n++) { 
        echo "<td>".$n."<td>";
    if ($n%20==0) {
         echo "</tr>";
        }
    }
    echo "</table>";
?>






