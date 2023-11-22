<?php
    function listall_giohang(){
        $sql = "SELECT c.id, c.soluong, sp.name, sp.img, sp.price, c.idpro FROM cart c INNER JOIN sanpham sp ON c.idpro = sp.id";
        return pdo_query($sql);
    }

    function sumall_soluong(){
        $sql = "SELECT SUM(soluong) as sum_soluong FROM cart";
        return pdo_query_one($sql);
    }

    function del_giohang($id){
        $sql = "DELETE FROM cart WHERE id = ".$id;
        pdo_execute($sql);
    }

    function insert_giohang($id){
        $sql = "SELECT * FROM cart WHERE idpro = '$id'";
        if (is_array(pdo_query_one($sql))){
            $sql = "UPDATE cart SET soluong = soluong + 1 WHERE idpro = '$id'";
        } else $sql = "INSERT INTO cart(idpro, soluong) VALUES('$id', 1)";
        pdo_execute($sql);
    }
?>