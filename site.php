<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Php playground</title>
</head>
<body>
<form action="site.php" method="post">
    First Num: <input type="number" name="num1"/> <br>
    Operation: <input type="textbox" name="operation"/> <br>
    Second Num: <input type="number" name="num2"/> <br>
    <input type="submit"/>
</form>
 <?php 
   $num1 = $_POST["num1"];
   $num2 = $_POST["num2"];
   $operation = $_POST["operation"];

    if($operation == "+"){
        echo $num1 + $num2;
    } else if($operation == "-") {
        echo $num1 - $num2;
    } else if($operation == "*"){
        echo $num1 * $num2;
    } else if ($operation == "/"){
        echo $num1 / $num2;
    } else {
        echo "invalid operator";
    }
 ?>
</body>
</html>