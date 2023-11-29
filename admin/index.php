<?php
ob_start();
include "../model/pdo.php";
include "../model/sanpham.php";
include "../model/danhmuc.php";
include "../model/taikhoan.php";
include "../model/donhang.php";
include "../model/thongke.php";
include "../model/binhluan.php";
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
                $target_dir = "../upload/product/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file " . htmlspecialchars(basename($_FILES["hinh"]["name"])) . " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm);
                echo "<script type='text/javascript'>
                        alert('Thêm thành công!');
                        window.location.href='index.php?act=listsp'
                    </script>";
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
            $binhluan = listall_binhluan($_GET['id']);
            include "sanpham/chitietsanpham.php";
            break;
        case "editsp":
            if (isset($_POST["capnhat"]) && ($_POST["capnhat"])) {
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/product/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file " . htmlspecialchars(basename($_FILES["hinh"]["name"])) . " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                update_sanpham($_GET['id'], $tensp, $giasp, $hinh, $mota, $iddm);
                echo "<script type='text/javascript'>
                        alert('Sửa thành công!');
                        window.location.href='index.php?act=listsp'
                    </script>";
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
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/category/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file " . htmlspecialchars(basename($_FILES["hinh"]["name"])) . " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                insert_danhmuc($tendm, $hinh);
                echo "<script type='text/javascript'>
                        alert('Thêm thành công!');
                        window.location.href='index.php?act=listdm'
                    </script>";
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
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/category/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file " . htmlspecialchars(basename($_FILES["hinh"]["name"])) . " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                update_danhmuc($_GET['id'], $tendm, $hinh);
                echo "<script type='text/javascript'>
                        alert('Sửa thành công!');
                        window.location.href='index.php?act=listdm'
                    </script>";
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
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/avatar/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file " . htmlspecialchars(basename($_FILES["hinh"]["name"])) . " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                $tel = $_POST["tel"];
                $role = $_POST["role"];
                insert_taikhoan($tentk, $user, $pass, $email, $address, $hinh, $tel, $role);
                echo "<script type='text/javascript'>
                        alert('Thêm thành công!');
                        window.location.href='index.php?act=listtk'
                    </script>";
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
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/avatar/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file " . htmlspecialchars(basename($_FILES["hinh"]["name"])) . " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                $tel = $_POST["tel"];
                $status = $_POST["status"];
                $role = $_POST["role"];
                update_taikhoan($_GET['id'], $tentk, $user, $pass, $email, $address, $hinh, $tel, $status, $role);
                echo "<script type='text/javascript'>
                        alert('Sửa thành công!');
                        window.location.href='index.php?act=listtk'
                    </script>";
            }
            $tk = listone_taikhoan($_GET['id']);
            include "taikhoan/edit.php";
            break;
        case "listbill":
            $listbill = listall_donhang();
            include "donhang/list.php";
            break;
        case "chitietdonhang":
            $bill = listone_donhang($_GET['id']);
            include "donhang/chitietdonhang.php";
            break;
        case "thongke":
            $listthongke = loadall_thongke();
            include "thongke/list.php";
            break;
        case "bieudo":
            $listthongke = loadall_thongke();
            include "thongke/chart.php";
            break;
    }
} else include "home.php";

include "footer.php";
?>