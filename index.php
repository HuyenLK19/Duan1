<?php
ob_start();
session_start();
include "view/header.php";
include "model/pdo.php";
include "model/sanpham.php";
include "model/taikhoan.php";
include "model/danhmuc.php";
include "global.php";


$allsp = listall_sanpham();
$sphot = loadall_sanpham_hot();
$listdm = listall_danhmuc();

if (isset($_GET["act"]) && $_GET["act"] !== "") {
    switch ($_GET["act"]) {
        case "dangnhap":
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $check_login = login($user, $pass);
                if (is_array($check_login)) {
                    $_SESSION['user'] = $check_login;
                    echo "<script type='text/javascript'>
                            alert('Đăng nhập thành công!');
                            window.location.href='index.php'
                        </script>";
                } else {
                    $thongbao = $check_login;
                    if (strlen($check_login) == 48) {
                        echo "<script type='text/javascript'>
                            alert('$thongbao');
                            window.location.href='index.php'
                        </script>";
                    } else echo "<script type='text/javascript'>
                                    alert('$thongbao');
                                    window.location.href='index.php?act=dangky'
                                </script>";
                }
            }
            break;
        case "dangxuat":
            session_unset();
            header("Location: index.php");
            break;
        case "dangky":
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $user = $_POST['user'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $repass = $_POST['repass'];
                if (checkuser($user) != '') {
                    $thongbao = checkuser($user);
                    echo "<script type='text/javascript'>
                            alert('$thongbao');
                        </script>";
                } else if (checkemail($email) != '') {
                    $thongbao = checkemail($email);
                    echo "<script type='text/javascript'>
                            alert('$thongbao');
                        </script>";
                } else if ($pass != $repass) {
                    echo "<script type='text/javascript'>
                            alert('Sai mật khẩu!');
                        </script>";
                } else {
                    dangky($user, $email, $pass);
                    echo "<script type='text/javascript'>
                            alert('Đăng ký thành công! Vui lòng đăng nhập lại!');
                            window.location.href='index.php';
                        </script>";
                }
            }
            include "view/dangky.php";
            break;
        case "thongtintk":
            include "view/thongtintk.php";
            break;
        case "sanpham":
            if (isset($_POST['kyw']) && ($_POST['kyw']) != "") {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['iddm']) && ($_GET['iddm']) > 0) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $dssp = listall_sanpham($kyw, $iddm);
            // $tendm = load_ten_dm($iddm);
            include "view/sanpham.php";
            break;
        case "chitietsnpham":
            if (isset($_GET['idsp']) && ($_GET['idsp']) > 0) {
                $id = $_GET['idsp'];
                $onesp = listall_sanpham($id);
                extract($onesp);
                // $sp_cungloai = load_sanpham_cungloai($id);
                include "view/sanphamct.php";
            } else {
                include "view/home.php";
            }
            break;
        case "danhmuc":
            include "view/danhmuc.php";
            break;
        case "chitietsanpham":
            include "view/chitietsanpham.php";
            break;
        case "gioithieu":
            include "view/gioithieu.php";
            break;
        case "lienhe":
            include "view/lienhe.php";
            break;
        case "addtocart":
            
            include "view/home.php";
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
