<?php
declare(strict_types = 1); 
include "autoloader.inc.php"; 

$firstNumber = $_POST["num1"];
$secondNumber = $_POST["num2"];
$operator = $_POST["operator"];

$calculate = new Calc((int)$firstNumber, (int)$secondNumber, $operator); 

try {
   $outcome = $calculate->calculate();
   header("Location: /OOPphp/?answer=$outcome"); 
} catch (TypeError $error) { 
    echo "Error: " . $error->getMessage; 
}

?>


