<?php

// $_GET

include_once 'functions.php';
if (isset($_GET['submit'])) {
    $name = $_GET['name'];
    
    if ($_GET['gender'] == "man") {
        $s = "мистер";     
    }  
    if ($_GET['gender'] == "woman") {
        $s = "мисис";
    }
   echo "Добро пожаловать, $s $name Смитт!";
}






?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>

<body>
    <div>
        <form action="index.php" method="get">
            Name: <input type="text" name="name"><br>
            Man: <input type="radio" name="gender" value = "man">
            Woman: <input type="radio" name="gender" value = "woman"><br>
            

            <input type="submit" value="Отправить" name="submit">

        </form>
    </div>




</body>

</html>