<?php
    function listAllProduct(){
        $sql = "SELECT p.id, p.name, p.price, p.img, p.mota, c.name as cate_name FROM product p INNER JOIN category c ON p.id_cate = c.id";
        return pdo_query($sql);
    }

    function oneProduct($id){
        $sql = "SELECT p.id, p.name, p.price, p.img, p.mota, c.name as cate_name FROM product p INNER JOIN category c ON p.id_cate = c.id WHERE p.id = ".$id;
        return pdo_query_one($sql);
    }

    function addProduct($name, $price, $img, $mota, $id_cate){
        $sql = "INSERT INTO product(name, price, img, mota, id_cate) VALUES('$name', '$price', '$img', '$mota', '$id_cate')";
        pdo_execute($sql);
    }
?>