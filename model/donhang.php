<?php
    function listall_donhang(){
        $sql = "SELECT dh.id, dh.pttt, dh.ngaydathang, dh.pttt, dh.soluong, dh.status, dh.status, tk.name as tentk, sp.price as giasp, sp.name as tensp FROM donhang dh INNER JOIN taikhoan tk ON dh.iduser = tk.id INNER JOIN sanpham sp ON dh.idpro = sp.id ORDER BY dh.id ASC";
        return pdo_query($sql);
    }

    function listone_donhang($id){
        $sql = "SELECT dh.id, dh.pttt, dh.ngaydathang, dh.pttt, dh.soluong, dh.status, dh.status, tk.name as tentk, sp.price as giasp, sp.name as tensp FROM donhang dh INNER JOIN taikhoan tk ON dh.iduser = tk.id INNER JOIN sanpham sp ON dh.idpro = sp.id WHERE dh.iduser = '$id' ORDER BY dh.id ASC";
        return pdo_query($sql);
    }
?>