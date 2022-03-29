<?php
    declare(strict_types = 1); 
    include "includes/autoloader.inc.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP PHP</title>
</head>
<body>
    <h2>Calculator</h2>
    <form action = "includes/calc.inc.php" method="POST">
        <input type="number" name="num1" placeholder="First Number">
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="num2" placeholder="Second Number">
        <button type="submit" name="submit">Calculate</button>
    </form>
    <p>Outcome: <?php echo $_GET['answer']?></p>
</body>
</html>

