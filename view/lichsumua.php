<!DOCTYPE html>
<html>
<head>
    <title>Lịch sử đặt hàng</title>
</head>
<body>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            color: #333;
        }

        table {
            width: 80%;
            margin: auto;
            border-collapse: collapse;
            margin-top: 50px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
    <table>
    <thead>
    <tr>

            <th>Tên sản phẩm</th>
            <th>Địa chỉ</th>
            <th>Số điện thoại</th>
            <th>Email</th>
            <th>Đơn giá</th>
            <th>Phương thức thanh toán</th>
            <th>Trạng thái đơn hàng</th>

    </tr>
  </thead>
  <tbody>
  <?php 
            if(is_array($lichsumua) && $lichsumua != null){
                for ($i = 0; $i < count($lichsumua); $i++) {
                    $id = $lichsumua[$i]['id'];
                    $tensanpham = $lichsumua[$i]['name'];
                    $diachi = $lichsumua[$i]['address'];
                    $tel = $lichsumua[$i]['tel'];
                    $iemail = $lichsumua[$i]['email'];
                    $pttt = $lichsumua[$i]['pttt'];
                    $ngaydathang = $lichsumua[$i]['ngaydathang'];
                    $dongia = $lichsumua[$i]['tong'];
                    $status = $lichsumua[$i]['status'];
                   
                   ?>

                            <tr>
                               
                                <td><?= $tensanpham ?></td>
                                <td><?= $diachi ?></td>
                                <td><?= $tel ?></td>
                                <td><?= $iemail ?></td>
                                <td><?= $pttt ?></td>
                                <td><?= $ngaydathang ?></td>
                                <td><?=  $dongia  ?></td>
                                <td><?=  $status ?></td>

                                </tr>
                                <?php } }?>
   
   
  </tbody>
      

      



    </table>
</body>
</html>