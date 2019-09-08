<?php
    if(isset($_POST['login'])) $login = $_POST['login'];
    if (isset($_POST['password'])) $password = $_POST['password'];
    if (isset($_POST['mail'])) $email = $_POST['mail'];
    $msg = "$login : $password : $email \r\n";
    if(isset($_POST["done"])){
        if($login != '' && $password != '' && $email != ''){
            if(file_exists($_SERVER['DOCUMENT_ROOT']."\user.txt")) {
                $fd = fopen($_SERVER['DOCUMENT_ROOT']."\user.txt", 'r');
                if($fd)
                {
                    while(!feof($fd)) {
                        $str = fgets($fd);
                        if(strpos($str, $login) !== false) {
                            echo '<a href="index.php">This login is in the list</a>';
                            exit();
                        }   
                    }
                    fclose($fd); 
                }
                $fp = fopen($_SERVER['DOCUMENT_ROOT']."\user.txt", 'a');
                fwrite($fp, $msg);
                fclose($fp);  
            }
            else {
                $fp = fopen($_SERVER['DOCUMENT_ROOT']."\user.txt", 'a');
                fwrite($fp, $msg);
                fclose($fp);
            }   
        }
    }       
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <p>Enter login: <input type="text" name="login"></p>
        <p>Enter password: <input type="text" name="password"></p>
        <p>Enter e-mail: <input type="text" name="mail"></p>
        <input type="submit" value="Send" name="done">
    </form>
</body>
</html>