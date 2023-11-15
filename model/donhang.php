<?php
    function listall_donhang(){
        $sql = "SELECT dh.id, dh.name, dh.address, dh.soluong, dh.tel, dh.email, dh.pttt, dh.ngaydathang, dh.tong, dh.status, tk.name as tentk, sp.price as giasp, sp.name as tensp FROM donhang dh INNER JOIN taikhoan tk ON dh.iduser = tk.id INNER JOIN sanpham sp ON dh.idpro = sp.id ORDER BY dh.id ASC";
        return pdo_query($sql);
    }
?>