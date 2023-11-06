<?php
    include "header.php";
    if (isset($_GET['act']) && ($_GET['act'] != '')){
        switch($_GET['act']){
            case "addsp":
                include "sanpham/add.php";
                break;
            case "adddm":
                include "danhmuc/add.php";
                break;
            case "listbill":
                include "donhang/list.php";
                break;
            case "listtk":
                include "taikhoan/list.php";
                break;
            case "listbl":
                include "binhluan/list.php";
                break;
            case "thongke":
                include "thongke/chart.php";
                break;
                                
        } 
    }else include "home.php";

    include "footer.php";
