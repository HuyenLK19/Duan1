<?php
    function listAllCate(){
        $sql = "SELECT * FROM category";
        return pdo_query($sql);
    }
?>