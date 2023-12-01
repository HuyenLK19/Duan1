<?php
    function del_giohang($id){
        foreach ($_SESSION['cart'] as $cart){
            if ($cart[0] == $id){
                array_splice($_SESSION['cart'], array_search($cart, $_SESSION['cart']), 1);
            }
        }
    }

    function insert_giohang($id){
        array_push($_SESSION['cart'], [$id, 1]);
    }

    function incre($id){
        $sp = pdo_query_one("SELECT kho FROM sanpham WHERE id = '$id'");
        foreach ($_SESSION['cart'] as $cart){
            if ($cart[0] == $id){
                if ($_SESSION['cart'][array_search($cart, $_SESSION['cart'])][1] == $sp['kho']){ 
                    $message = "Tối đa số sản phẩm!";                   
                    echo '
                    <script type="text/javascript">
                        alert("ABCDS");
                    </script>';
                    
                } else $_SESSION['cart'][array_search($cart, $_SESSION['cart'])][1]++;
            }
        };
    }

    function decre($id){
        foreach ($_SESSION['cart'] as $cart){
            if ($cart[0] == $id){
                $_SESSION['cart'][array_search($cart, $_SESSION['cart'])][1]--;
            };
            if ($_SESSION['cart'][array_search($cart, $_SESSION['cart'])][1] == 0){
                array_splice($_SESSION['cart'], array_search($cart, $_SESSION['cart']), 1);
            };
        };
        
    }
?>