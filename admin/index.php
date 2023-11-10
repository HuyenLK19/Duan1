<?php
    include "header.php";
    if (isset($_GET['act']) && ($_GET['act'] != '')){
        switch($_GET['act']){
            case "addsp":
                include "sanpham/add.php";
                break;
            case "listsp":
                include "sanpham/list.php";
                break;
            case "chitietsanpham":
                include "sanpham/chitietsanpham.php";
                break;
            case "editsp":
                include "sanpham/edit.php";
                break;
            case "delsp":
                include "";
                break;
            case "adddm":
                include "danhmuc/add.php";
                break;
            case "listdm":
                include "danhmuc/list.php";
                break;
            case "editdm":
                include "danhmuc/edit.php";
                break;
            case "deldm":
                include "";
                break;
            case "listbill":
                include "donhang/list.php";
                break;
            case "listtk":
                include "taikhoan/list.php";
                break;
            case "chitiettk":
                include "taikhoan/chitiettk.php";
                break;
            case "thongke":
                include "thongke/chart.php";
                break;                        
        } 
    } else include "home.php";

    include "footer.php";
?>