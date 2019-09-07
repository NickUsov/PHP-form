<?php
    if(file_exists($_SERVER['DOCUMENT_ROOT']."\user.txt"))
    {
        echo sprintf('<p>Users: %s</p>', sizeof(file($_SERVER['DOCUMENT_ROOT']."\user.txt")));
    }
    else{
        echo 'Users: 0';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        li {
            list-style-type:none;
        }
        a {
            text-decoration: none;
            color: gray;
        }
    </style>
</head>
<body>
    <ul>
        <li><a href="addUser.php">Add</a></li>
        <li><a href="showUser.php">Show</a></li>
    </ul>
</body>
</html>