<?php
    function listall_binhluan($idpro){
        $sql = "SELECT bl.id, bl.noidung, tk.name, bl.ngaybinhluan FROM binhluan bl INNER JOIN taikhoan tk ON bl.iduser = tk.id WHERE bl.idpro = '$idpro'";
        return pdo_query($sql);
    }
?>