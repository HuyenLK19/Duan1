<?php
    function listall_taikhoan(){
        $sql = "SELECT * FROM taikhoan ORDER BY id ASC";
        return pdo_query($sql);
    }

    function listone_taikhoan($id){
        $sql = "SELECT * FROM taikhoan WHERE id = '$id'";
        return pdo_query($sql);
    }

    function insert_taikhoan($tentk, $user, $pass, $email, $address, $hinh, $tel, $role){
        $sql = "INSERT INTO taikhoan(name, user, pass, email, address, avatar, tel, role) VALUES('$tentk', '$user', '$pass', '$email', '$address', '$hinh', '$tel', '$role')";
        pdo_execute($sql);
    }

    function update_taikhoan($id, $tentk, $user, $pass, $email, $address, $hinh, $tel, $status, $role){
        if ($hinh != "") {
            $sql = "UPDATE taikhoan SET name = '$tentk', user = '$user', pass = '$pass', email = '$email', address = '$address', avatar = '$hinh', tel = '$tel', active = '$status', role = '$role' WHERE id = '$id'";
        } else $sql = "UPDATE taikhoan SET name = '$tentk', user = '$user', pass = '$pass', email = '$email', address = '$address', tel = '$tel', active = '$status', role = '$role' WHERE id = '$id'";
        pdo_execute($sql);
    }

    function login($user, $pass){
        $sql = "SELECT * FROM taikhoan WHERE user = '$user' AND pass = '$pass'";
        if (is_array(pdo_query($sql))){
            return pdo_query_one($sql);
        } else {
            $sql = "SELECT * FROM taikhoan WHERE user = '$user'";
            if (is_array(pdo_query_one($sql))){
                return "Nhập sai mật khẩu!";
            }
            return "Tài khoản không tồn tại!";
        }
    }
?>