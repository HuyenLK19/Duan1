<?php
session_start();
ob_start();
include "model/pdo.php";
include "model/sanpham.php";
include "model/taikhoan.php";
include "model/danhmuc.php";
include "model/cart.php";
$listgiohang = listall_giohang();
$soluong = sumall_soluong();
$allsp = listall_sanpham();
$sphot = loadall_sanpham_hot();
$listdm = listall_danhmuc();


include "view/header.php";

if (isset($_GET["act"]) && $_GET["act"] !== "") {
    switch ($_GET["act"]) {
        case "formdangnhap":
            include "view/dangnhap.php";
            break;
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
        case "quenmk":
            if (isset($_POST['khoiphuc'])){
                $user = $_POST['user'];
                $email = $_POST['email'];
                $thongbao = "Mật khẩu của bạn là: ".repass($user, $email)['pass'];
                if (!is_array(repass($user, $email))){
                    $thongbao = "Tài khoản không tồn tại!";
                    echo "<script type='text/javascript'>
                            window.location.href='index.php?act=quenmk'
                            alert('$thongbao');
                        </script>";
                } else {
                echo "<script type='text/javascript'>
                            alert('$thongbao');
                            window.location.href='index.php?act=formdangnhap'
                        </script>";
                }
            }
            include "view/quenmk.php";
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
            $dssp = list_sanphamnew();
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
            $dm = listone_danhmuc($_GET['id']);
            $list = listsptheodm($_GET['id']);
            include "view/danhmuc.php";
            break;
        case "chitietsanpham":
            // $list = listsptheodm($_GET["id"]);
            $ctsp = listone_sanpham($_GET['idsp']);
            include "view/chitietsanpham.php";
            break;
        case "allsanpham":
            $list = listall_sanpham();
            include "view/allsanpham.php";
            break;
        case "gioithieu":
            include "view/gioithieu.php";
            break;
        case "lienhe":
            include "view/lienhe.php";
            break;
        case "thongtintk":
            if (isset($_SESSION['user']['id'])) {
                $user_id = $_SESSION['user']['id'];
                $user_info = listone_taikhoan($user_id);
                include "view/thongtintk.php";
            } else {
                // 
            }
            break;

            case "suatk":
                if (isset($_POST["capnhat"]) && ($_POST["capnhat"])) {
                    $tentk = isset($_POST["name"]) ? $_POST["name"] : '';
                    $user = isset($_POST["user"]) ? $_POST["user"] : '';
                    $pass = isset($_POST["pass"]) ? $_POST["pass"] : '';
                    $email = isset($_POST["email"]) ? $_POST["email"] : '';
                    $address = isset($_POST["address"]) ? $_POST["address"] : '';
                    $tel = isset($_POST["tel"]) ? $_POST["tel"] : '';
                    $status = isset($_POST["status"]) ? $_POST["status"] : '';
                    $role = isset($_POST["role"]) ? $_POST["role"] : '';
                    // Kiểm tra xem 'id' có tồn tại trong $_GET không
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                    } else {
                        echo "ko co id";
    
                        exit; 
                    }
                    update_taikhoans($id, $tentk, $user, $pass, $email, $address, $tel);
    
                    echo "<script type='text/javascript'>
                        alert('Sửa thành công!');
                        window.location.href='index.php?act=thongtintk'
                    </script>";
                }
    
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $tk = listone_taikhoan($_GET['id']);
                    include "view/suatk.php";
                } else {
    
                    echo "ko co id";
                }
                break;
                case "matkhau":
                    if (!isset($_SESSION['user']['user'])) {
                        header("Location: login.php");
                        exit();
                    }
                
                    $errors = array();
                
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $tendn = $_POST['tendn'];
                        $oldPassword = $_POST['old_password'];
                        $newPassword = $_POST['new_password'];
                        $confirmPassword = $_POST['confirm_password'];
                
                        // Kiểm tra xem có trường nào không được nhập không
                        $requiredFields = ['tendn', 'old_password', 'new_password', 'confirm_password'];
                
                        foreach ($requiredFields as $field) {
                            if (empty($_POST[$field])) {
                                $errors[$field] = 'Trường này không được để trống.';
                            }
                        }
                
                        // Kiểm tra mật khẩu mới có ít nhất 6 ký tự
                        if (strlen($newPassword) < 6) {
                            $errors['new_password'] = 'Mật khẩu mới phải chứa ít nhất 6 ký tự.';
                        }
                
                        // Kiểm tra xác nhận mật khẩu
                        if ($newPassword != $confirmPassword) {
                            $errors['confirm_password'] = 'Mật khẩu và xác nhận mật khẩu mới không khớp.';
                        }
                
                        // Nếu không có lỗi, thực hiện các hành động cập nhật mật khẩu
                        if (empty($errors)) {
                            echo "Cập nhật mật khẩu thành công!";

                        }
                    }
                
                    include "view/matkhau.php";
                    break;
        case "addtocart":
            insert_giohang($_GET['id']);
            header("Location: index.php");
            break;
        case "delcart":
            del_giohang($_GET['id']);
            header("Location: index.php");
            break;
        case "cart":
            $list = listall_giohang();
            include "view/cart.php";
            break;
        case "checkout":
            $list = listall_giohang();
            include "view/checkout.php";
            break;
        default:
            include "view/home.php";
            break;
    }
} else include "view/home.php";

include "view/footer.php";