<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Php playground</title>
</head>
<body>
    <form action="site.php" method="get">
        <h1>Addition</h1>
   <input type="number" name="num1"><br />
   <input type="number" name="num2"><br />
   <input type="submit">
    </form>
 Answer: <?php echo $_GET["num1"] + $_GET["num2"];?>
</body>
</html>