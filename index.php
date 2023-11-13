<?php
include "view/header.php";
include "model/pdo.php";

if (isset($_GET["act"]) && $_GET["act"] !== "") {
    switch ($_GET["act"]) {
        case "danhmuc":
            include "view/danhmuc.php";
            break;
        case "gioithieu":
            include "view/gioithieu.php";
            break;
        case "lienhe":
            include "view/lienhe.php";
            break;
        case "cart":
            include "view/cart.php";
            break;
        case "checkout":
            include "view/checkout.php";
            break;
        default:
            include "view/home.php";
            break;
    }
} else
    include "view/home.php";

include "view/footer.php";
