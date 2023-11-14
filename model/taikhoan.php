<?php
    function listall_taikhoan(){
        $sql = "SELECT * FROM taikhoan ORDER BY id ASC";
        return pdo_query($sql);
    }

    function listone_taikhoan($id){
        $sql = "SELECT * FROM taikhoan WHERE id = '$id'";
        return pdo_query($sql);
    }

    function insert_taikhoan($tentk, $user, $pass, $email, $address, $tel, $status, $role){
        $sql = "INSERT INTO taikhoan(name, user, pass, email, address, tel, active, role) VALUES('$tentk', '$user', '$pass', '$email', '$address', '$tel', '$status', '$role')";
        pdo_execute($sql);
    }

    function update_taikhoan($id, $tentk, $user, $pass, $email, $address, $tel, $status, $role){
        $sql = "UPDATE taikhoan SET name = '$tentk', user = '$user', pass = '$pass', email = '$email', address = '$address', tel = '$tel', active = '$status', role = '$role' WHERE id = '$id'";
        pdo_execute($sql);
    }
?>