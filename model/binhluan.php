<?php
    function listall_binhluan($idpro){
        $sql = "SELECT bl.id, bl.noidung, tk.name, bl.ngaybinhluan FROM binhluan bl INNER JOIN taikhoan tk ON bl.iduser = tk.id WHERE bl.idpro = '$idpro'";
        return pdo_query($sql);
    }
    
    function insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan){
        $sql = "insert into binhluan(noidung, iduser, idpro, ngaybinhluan) values('$noidung', '$iduser', '$idpro', '$ngaybinhluan')";
        pdo_execute($sql);
    }

    function delete_binhluan($id){
        $sql = "delete from binhluan where id=". $id;
        pdo_query($sql);
    }

    function loadall_binhluan($idpro){
        $sql = "select * from binhluan where 1";
        if ($idpro>0)$sql.=" AND idpro='".$idpro."'";
        $sql.=" order by id desc";
        $listbl=pdo_query($sql);
        return $listbl;
    }
?>