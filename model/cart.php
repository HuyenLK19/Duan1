<?php
    function del_giohang($id){
        foreach ($_SESSION['cart'] as $cart){
            $i = array_search($id, $cart);
        }
        array_splice($_SESSION['cart'], $i, 1);
    }
    function insert_giohang($id){
        array_push($_SESSION['cart'], [$id, 1]);
    }
?>