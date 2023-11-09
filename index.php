<?php
    include "view/header.php";
    include "view/home.php";
    include "view/footer.php";
    if (isset($_GET["act"]) && $_GET["act"] =! ""){
        switch($GET["act"]){
            case "danhmuc":
                include "danhmuc.php";
                break;
            case "gioithieu":
                include "gioithieu.php";
                break;
            case "lienhe.php":
                include "lienhe.php";
                break;
        }
    }
?>