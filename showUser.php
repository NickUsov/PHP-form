<?php
    if(file_exists($_SERVER['DOCUMENT_ROOT']."\user.txt")){
        $arr = file($_SERVER['DOCUMENT_ROOT']."\user.txt");
        read_array($arr);
    }
    function read_array($arr)
    {
        $str = '<table><tr><th>Login</th><th>Password</th><th>E-mail</th></tr>';
        foreach ($arr as $a) {
            $txt = explode(':', $a);
            $str .= sprintf('<tr><td>%s</td><td>%s</td><td>%s</td></tr>', $txt[0], $txt[1], $txt[2]);
        }
        $str .= '<table>';
        echo $str;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ShowUser</title>
    <style>
        table {
            border: 1px solid gray;
            border-collapse: collapse;
        }
        td, th {
            border: 1px solid gray;
            width: 150px;
            height: 40px;
            text-align: center;
        }
    </style>
</head>
<body>
    
</body>
</html>