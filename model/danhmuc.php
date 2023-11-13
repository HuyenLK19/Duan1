<?php
    function listall_danhmuc(){
        $sql = "SELECT * FROM danhmuc ORDER BY id ASC";
        return pdo_query($sql);
    };

    function listone_danhmuc($id){
        $sql = "SELECT * FROM danhmuc WHERE id = ".$id;
        return pdo_query($sql);
    };

    function insert_danhmuc($tendm){
        $sql = "INSERT INTO danhmuc(name) VALUES('$tendm')";
        pdo_execute($sql);
    };

    function update_danhmuc($id, $tendm){
        $sql = "UPDATE danhmuc SET name = '$tendm' WHERE id = '$id'";
        pdo_execute($sql);
    };

    function delete_danhmuc($id){
        $sql = "DELETE FROM danhmuc WHERE id = '$id'";
        pdo_execute($sql);
    }
?>