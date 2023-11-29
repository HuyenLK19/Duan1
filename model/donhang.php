<?php
    function listall_donhang(){
        $sql = "SELECT dh.id, dh.pttt, dh.pttt, dh.soluong,dh.tong, dh.status, tk.name as tentk, sp.price as giasp, sp.name as tensp, tk.address as diachi, tk.tel as sdt, tk.email as email FROM donhang dh INNER JOIN taikhoan tk ON dh.iduser = tk.id INNER JOIN sanpham sp ON dh.idpro = sp.id ORDER BY dh.id ASC";
        return pdo_query($sql);
    }

    function listone_donhang_user($id){
        $sql = "SELECT dh.id, dh.pttt, dh.pttt, dh.soluong, dh.status, tk.name as tentk, sp.price as giasp, sp.name as tensp FROM donhang dh INNER JOIN taikhoan tk ON dh.iduser = tk.id INNER JOIN sanpham sp ON dh.idpro = sp.id WHERE dh.iduser = '$id' ORDER BY dh.id ASC";
        return pdo_query($sql);
    }

    function listone_donhang($id){
        $sql = "SELECT dh.id, dh.soluong, dh.pttt, dh.pttt, dh.status, tk.name as tentk, sp.price as giasp, sp.name as tensp, tk.address as diachi, tk.tel FROM donhang dh INNER JOIN taikhoan tk ON dh.iduser = tk.id INNER JOIN sanpham sp ON dh.idpro = sp.id WHERE dh.id = '$id'";
        return pdo_query_one($sql);
    }
    
    function lichsumua($iduser){
        $sql="SELECT * FROM donhang WHERE iduser = $iduser ORDER BY id DESC";
        $lichsumua=pdo_query($sql);
        return $lichsumua;
    }
?>