<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    echo "<style>";
    echo "#welcome{font-size: 14pt; text-align: center; font-family: Comic Sans MS;}";
    echo "table{padding-top: 50px; text-align: center; font-size: 14pt;}";
    echo "th{background-color: pink; text-align: center}";
    echo "td{background-color: lightgreen;}";
    echo "</style>";

    $username = $_POST["username"];
        $password = $_POST["password"];
      $bacon = $_POST["bacon"];
      $lettuce = $_POST["lettuce"];
     $tomato = $_POST["tomato"];
    $ship = $_POST["ship"];

    echo "<div id='welcome'>";
        echo "<h2><b>Welcome $username!</b></h2>";
        echo "Your password is: $password";
    echo "</div>";

    echo "<div>";
        echo "<table>";
            echo "<tr>";
                echo "<th></th>";
                echo "<th>Quantity</th>";
                echo "<th>Cost Per Item</th>";
                echo "<th>SubTotal</th>";
            echo "</tr>";
            echo "<tr>";
                echo "<th>Bacon</th>";
                echo "<td>$bacon</td>";
                echo "<td>$7.32</td>";
                $value1 = 7.32*$bacon;
                echo "<td>$$bac</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<th>Lettuce</th>";
                echo "<td>$lettuce</td>";
                echo "<td>$3.44</td>";
                $value2 = 3.44*$lettuce;
                echo "<td>$$let</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<th>Tomato</th>";
                echo "<td>$tomato</td>";
                echo "<td>$1.09</td>";
                $value3 = 1.09*$tomato;
                echo "<td>$$tom</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<th>Shipping</th>";
                echo "<td colspan='2'>$shipping</td>";
                if ($ship == "Free 7-day"){
                    $shi = 0;
                }
                else if ($ship == "$50 Overnight"){
                    $shi = 50;
                }
                else if ($ship == "$5 3-day"){
                    $shi = 5;
                }
                echo "<td>$$shi</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<th colspan='3'>Total</th>";
                $total = $bac + $let + $tom + $shi;
                echo "<th>$$total</th>";
            echo "</tr>";
        echo "</table>";
    echo "</div>";
?>
