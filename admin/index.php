<?php
ob_start();
include "../model/pdo.php";
include "../model/sanpham.php";
include "../model/danhmuc.php";
include "../model/taikhoan.php";
include "header.php";

if (isset($_GET['act']) && ($_GET['act'] != '')) {
    switch ($_GET['act']) {
        case "addsp":
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file " . htmlspecialchars(basename($_FILES["hinh"]["name"])) . " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm);
                $thongbao = "Thêm sản phẩm thành công!";
                header("Location: index.php?act=listsp");
            };
            $listdanhmuc = listall_danhmuc();
            include "sanpham/add.php";
            break;
        case "listsp":
            $listProduct = listall_sanpham();
            include "sanpham/list.php";
            break;
        case "chitietsanpham":
            $product = listone_sanpham($_GET['id']);
            include "sanpham/chitietsanpham.php";
            break;
        case "editsp":
            if (isset($_POST["capnhat"]) && ($_POST["capnhat"])) {
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file " . htmlspecialchars(basename($_FILES["hinh"]["name"])) . " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                update_sanpham($_GET['id'], $tensp, $giasp, $hinh, $mota, $iddm);
                $thongbao = "Sửa sản phẩm thành công!";
                header("Location: index.php?act=listsp");
            }
            $listdanhmuc = listall_danhmuc();
            $product = listone_sanpham($_GET['id']);
            include "sanpham/edit.php";
            break;
        case "delsp":
            delete_sanpham($_GET["id"]);
            header("Location: index.php?act=listsp");
            break;
        case "adddm":
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tendm = $_POST['tendm'];
                insert_danhmuc($tendm);
                $thongbao = "Thêm danh mục thành công!";
                header("Location: index.php?act=listdm");
            };
            include "danhmuc/add.php";
            break;
        case "listdm":
            $list_danhmuc = listall_danhmuc();
            include "danhmuc/list.php";
            break;
        case "editdm":
            if (isset($_POST["capnhat"]) && ($_POST["capnhat"])) {
                $tendm = $_POST["tendm"];
                update_danhmuc($_GET['id'], $tendm);
                $thongbao = "Sửa danh mục thành công!";
                header("Location: index.php?act=listdm");
            }
            $danhmuc = listone_danhmuc($_GET['id']);
            include "danhmuc/edit.php";
            break;
        case "deldm":
            delete_danhmuc($_GET["id"]);
            header("Location: index.php?act=listdm");
            break;
        case "addtk":
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])){
                $tentk = $_POST["tentk"];
                $user = $_POST["user"];
                $pass = $_POST["pass"];
                $email = $_POST["email"];
                $address = $_POST["address"];
                $tel = $_POST["tel"];
                $role = $_POST["role"];
                insert_taikhoan($tentk, $user, $pass, $email, $address, $tel, 1, $role);
                header("Location: index.php?act=listtk");
                $thongbao = "Thêm tài khoản thành công!";
            }
            include "taikhoan/add.php";
            break;
        case "listtk":
            $listtk = listall_taikhoan();
            include "taikhoan/list.php";
            break;
        case "chitiettk":
            $tk = listone_taikhoan($_GET['id']);
            include "taikhoan/chitiettk.php";
            break;
        case "edittk":
            if (isset($_POST["capnhat"]) && ($_POST["capnhat"])) {
                $tentk = $_POST["tentk"];
                $user = $_POST["user"];
                $pass = $_POST["pass"];
                $email = $_POST["email"];
                $address = $_POST["address"];
                $tel = $_POST["tel"];
                $status = $_POST["status"];
                $role = $_POST["role"];
                update_taikhoan($_GET['id'], $tentk, $user, $pass, $email, $address, $tel, $status, $role);
                $thongbao = "Sửa tài khoản thành công!";
                header("Location: index.php?act=listtk");
            }
            $tk = listone_taikhoan($_GET['id']);
            include "taikhoan/edit.php";
            break;
        case "listbill":
            include "donhang/list.php";
            break;
        case "thongke":
            include "thongke/chart.php";
            break;
    }
} else include "home.php";

include "footer.php";
?>