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

 <form action="site.php" method="get">
        <h1>Subraction</h1>
   <input type="number" name="num3"><br />
   <input type="number" name="num4"><br />
   <input type="submit">
    </form>
 Answer: <?php echo $_GET["num3"] - $_GET["num4"];?>

 <form action="site.php" method="get">
        <h1>Multiplcation</h1>
   <input type="number" name="num5"><br />
   <input type="number" name="num6"><br />
   <input type="submit">
    </form>
 Answer: <?php echo $_GET["num5"] * $_GET["num6"];?>

 <form action="site.php" method="get">
        <h1>Division</h1>
   <input type="number" name="num7"><br />
   <input type="number" name="num8"><br />
   <input type="submit">
    </form>
 Answer: <?php echo $_GET["num7"] / $_GET["num8"];?>
</body>
</html>