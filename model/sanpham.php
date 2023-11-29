<?php
function listall_sanpham()
{
    $sql = "SELECT sp.id, sp.name, sp.price, sp.img, sp.mota, sp.iddm, dm.name as cate_name FROM sanpham sp INNER JOIN danhmuc dm ON sp.iddm = dm.id limit 17";
    return pdo_query($sql);
}
function list_sanphamhot()
{
    $sql = "SELECT sp.id, sp.name, sp.price, sp.img, sp.mota, sp.iddm, dm.name as cate_name FROM sanpham sp INNER JOIN danhmuc dm ON sp.iddm = dm.id limit 8";
    return pdo_query($sql);
}

function listone_sanpham($id)
{
    $sql = "SELECT sp.id, sp.name, sp.price, sp.img, sp.mota, sp.iddm, dm.name as cate_name FROM sanpham sp INNER JOIN danhmuc dm ON sp.iddm = dm.id WHERE sp.id = " . $id;
    return pdo_query_one($sql);
}

function listsptheodm($id)
{
    $sql = "SELECT * FROM sanpham WHERE iddm = " . $id;
    return pdo_query($sql);
}

function loadall_sanpham_hot()
{
    $sql = "SELECT * FROM sanpham WHERE 1 ORDER BY view DESC limit 0,6";
    return pdo_query($sql);
}

function insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm)
{
    $sql = "INSERT INTO sanpham(name, price, img, mota, iddm) VALUES('$tensp', '$giasp', '$hinh', '$mota', '$iddm')";
    pdo_execute($sql);
};

function update_sanpham($id, $tensp, $giasp, $hinh, $mota, $iddm)
{
    if ($hinh != '') {
        $sql = "UPDATE sanpham SET name = '$tensp', price = '$giasp', img = '$hinh', mota = '$mota', iddm = '$iddm' WHERE id = '$id'";
    } else $sql = "UPDATE sanpham SET name = '$tensp', price = '$giasp', mota = '$mota', iddm = '$iddm' WHERE id = '$id'";
    pdo_execute($sql);
};

function delete_sanpham($id)
{
    $sql = "DELETE FROM sanpham WHERE id = '$id'";
    pdo_execute($sql);
}
