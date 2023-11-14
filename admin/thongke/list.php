<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
  .mb10 {
    margin: 20px 0;
}
table{
width: 100%;
height: 300px;
margin-left: 50px;



}
.mb10 a input{
    width: 100px;
    height: 30px;
    background-color: #80AACC;
    border: none;
    border-radius: 5px;
    color: #fff;
    margin-left: 50px;


}
</style>
<body>
<div class="row">
    <div class="row frmtitle">
        <h1>THỐNG KÊ SẢN PHẨM THEO LOẠI</h1>
    </div>

    <div class="row frmcontent">
        <div class="row mb10 frmdslh">
            <table border="1">
                <tr>
                    <th>MÃ DANH MỤC</th>
                    <th>TÊN DANH MỤC</th>
                    <th>SỐ LƯỢNG</th>
                    <th>GIÁ CAO NHẤT</th>
                    <th>GIÁ THẤP NHẤT</th>
                    <th>GIÁ TRUNG BÌNH</th>                    
                </tr>
                <?php
                    foreach ($listthongke as $thongke){
                        extract($thongke);
                        echo '<tr>
                        <td>'.$madm.'</td>
                        <td>'.$tendm.'</td>
                        <td>'.$countsp.'</td>
                        <td>'.$maxprice.'</td>
                        <td>'.$minprice.'</td>
                        <td>'.$avgprice.'</td>
                        </tr>';
                    }
                ?>
                <div class="row mb10">
                    <a href="index.php?act=bieudo"><input type="button" value="Xem biểu đồ"></a>
                </div>
            </table>
        </div>
    </div>
</div>
</body>
</html>