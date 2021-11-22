<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    echo "<style>";
    echo "h1{padding-top:50px;padding-left:50px; font-family: Comic Sans MS;color:sandybrown;}";
    echo"p{padding-left:50px;font-family: Comic Sans MS; color:sandybrown;}";
    echo "table{padding-left: 50px; text-align: center; font-size: 14pt;font-family:Comic Sans MS;}";
    echo "th{background-color: pink; text-align: center}";
    echo "td{background-color: lightgreen;}";
    echo "</style>";

    $email = $_POST["email"];
        $password = $_POST["password"];
      $bacon = $_POST["bacon"];
      $lettuce = $_POST["lettuce"];
     $tomato = $_POST["tomato"];
    $ship = $_POST["ship"];

        echo "<h1><b>Welcome $email!</b></h1>";
        echo "<p>Your password is: $password</p>";

    echo "<div>";
        echo "<table>";
            echo "<tr>";
                echo "<th></th>";
                echo "<th>Quantity</th>";
                echo "<th>Item Cost</th>";
                echo "<th>Subtotal</th>";
            echo "</tr>";
            echo "<tr>";
                echo "<th>Bacon</th>";
                echo "<td>$bacon</td>";
                echo "<td>$7.32</td>";
                $bac = 7.32*$bacon;
                echo "<td>$$bac</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<th>Lettuce</th>";
                echo "<td>$lettuce</td>";
                echo "<td>$3.44</td>";
                $let = 3.44*$lettuce;
                echo "<td>$$let</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<th>Tomato</th>";
                echo "<td>$tomato</td>";
                echo "<td>$1.09</td>";
                $tom = 1.09*$tomato;
                echo "<td>$$tom</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<th>Shipping</th>";
                echo "<td colspan='2'>$ship</td>";
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
