<?php
include "view/header.php";
include "model/pdo.php";
include "model/taikhoan.php";

if (isset($_GET["act"]) && $_GET["act"] !== "") {
    switch ($_GET["act"]) {
        case "dangnhap":
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])){
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $check_login = login($user, $pass);
                if (is_array($check_login)){
                    $_SESSION['user'] = $check_login;
                    header("location: index.php");
                } else {
                    $thongbao = $check_login;
                    echo "<script type='text/javascript'>alert('$thongbao');</script>";
                }
            }
            include "view/home.php";
            break;
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
} else include "view/home.php";

include "view/footer.php";
