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
    
    </form>
<?php 
    // looping through arrays in php
    $luckyNames = array("oluwaloni", "richard", "sodeinde");
    for($i = 0; $i < count($luckyNames); $i++){
        echo "$luckyNames[2] <br>";
    }
    // include allows us to use another file in our php file which is synonymous to components in react.
    include "header.html";
    // classes and objects in php
    class Book{
        var $title;
        var $author;
        var $pages;
       
        // constructors
        function _construct(){
            echo "the books";
        }
    }

    $book1 = new Book;
    $book1 ->title = "Harry Potter";
    $book1 ->author = "JK Rowling";
    $book1 ->pages = 400;

    $book2 = new Book;
    $book2 ->title = "Lord of the rings";
    $book2 ->author = "Tolkin";
    $book2 ->pages = 700;

?>
</body>
</html>