<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    
    $q1 = $_POST["q1"];
        $q2 = $_POST["q2"];
        $q3 = $_POST["q3"];
        $q4 = $_POST["q4"];
        $q5 = $_POST["q5"];
    
        echo "Q1: What does 'Chai' mean?";
    echo "<br>";
        echo "      You answered: $q1";
    echo "<br>";
        echo "      Correct Answer: 'tea'";
    echo "<br>";
    echo "<br>";

        echo "Q2: What 3 spices are typically in chai tea?";
    echo "<br>";
        echo "      You answered: $q2";
    echo "<br>";
        echo "      Correct Answer: Cinnamon, Cardamom, & Cloves";
    echo "<br>";
    echo "<br>";

        echo "Q3: How much caffeine is in a cup of chai?";
    echo "<br>";
        echo "      You answered: $q3";
    echo "<br>";
        echo "      Correct Answer: 40 mg";
    echo "<br>";
    echo "<br>";

        echo "Q4: What tea brand had the most tea sales in 2020?";
    echo "<br>";
        echo "      You answered: $q4";
    echo "<br>";
        echo "      Correct Answer: Lipton";
    echo "<br>";
    echo "<br>";

        echo "Q5: What is a 'Dirty Chai'";
    echo "<br>";
        echo "      You answered: $q5";
    echo "<br>";
        echo "      Correct Answer: Chai with a shot of espresso";
    echo "<br>";
    echo "<br>";

    $score = 0;
    if ($q1 == "'tea'"){
        $score++;
    }
    if ($q2 == "Cinnamon, Cardamom, & Cloves"){
        $score++;
    }
    if ($q3 == "40 mg"){
        $score++;
    }
    if ($q4 == "Lipton"){
        $score++;
    }
    if ($q5 == "Chai with a shot of espresso"){
        $score++;
    }

    $percent = ($score/5)*100;
    echo "Score: $score/5 = $percent%!";
?>
