<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>php</title>
</head>
<body>
       <head>
        <div class="nav__wrapper">
            <div class="nav__items"> <a href="?name=tovar">товары</a></div>
            <div class="nav__items"><a href="?name=aksia">Акция</a></div>
            <div class="nav__items"> <a href="?name=skit">скидки</a></div>    
        </div>
       </head>  
        <?php 
        $site_name = $_GET["name"]??"0";
        switch($site_name){
             case "aksia":
                require_once "index1.php";
                break;
            case "skit":
                require_once "index2.php";
                break;
            case "tovar":
                require_once "inex4.php";
                break;    
    } 
        ?>
</body>
</html>