<?php
    function listall_donhang(){
        $sql = "SELECT dh.id, dh.pttt, dh.ngaydathang, dh.status, tk.name as tentk, sp.price as giasp, sp.name as tensp FROM donhang dh INNER JOIN taikhoan tk ON dh.iduser = tk.id INNER JOIN sanpham sp ON dh.idpro = sp.id ORDER BY dh.id ASC";
        return pdo_query($sql);
        
    }
    function listone_donhang($id){
        $sql = "SELECT dh.id, ct.soluong, dh.pttt, dh.ngaydathang, dh.status, tk.name as tentk, sp.price as giasp, sp.name as tensp, tk.address as diachi, tk.tel FROM donhang dh INNER JOIN taikhoan tk ON dh.iduser = tk.id INNER JOIN sanpham sp ON dh.idpro = sp.id INNER JOIN cart ct ON dh.id = ct.idbill WHERE dh.id = '$id'";
        return pdo_query_one($sql);
    }
    
    function loadall_bill(){
        $sql = "select * from donhang order by id desc";
        $listdonhang=pdo_query($sql);
        return $listdonhang;
    }
    function lichsumua($iduser){
        $sql="SELECT * FROM donhang WHERE iduser = $iduser ORDER BY id DESC";
        $lichsumua=pdo_query($sql);
        return $lichsumua;
    }
?>