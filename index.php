<?php
    include "view/header.php";
    if (isset($_GET["act"]) && $_GET["act"] =! ""){
        switch($_GET["act"]){
            case "danhmuc":
                include "view/danhmuc.php";
                break;
            case "gioithieu":
                include "gioithieu.php";
                break;
            case "lienhe.php":
                include "lienhe.php";
                break;
            default:
                include "view/home.php";
                break;
        }
    } else include "view/home.php";

    include "view/footer.php";
?>