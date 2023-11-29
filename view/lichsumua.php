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
            color: #3D464C;
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
            <th>Phương thức thanh toán</th>
            <th>Số lượng</th>
            <th>Tổng</th>
            <th>Trạng thái đơn hàng</th>
    </tr>
  </thead>
  <tbody>
  <?php 
            if(is_array($lichsumua) && $lichsumua != null){
                for ($i = 0; $i < count($lichsumua); $i++) {
                    $id = $lichsumua[$i]['id'];
                    $pttt = $lichsumua[$i]['pttt'];
                    $soluong = $lichsumua[$i]['soluong'];
                    $tong = $lichsumua[$i]['tong'];
                    $status = $lichsumua[$i]['status'];
                   ?>
                            <tr>        
                                <td><?= $pttt ?></td>
                                <td><?= $soluong ?></td>
                                <td><?=  $tong  ?></td>
                                <td><?=  $status ?></td>
                                </tr>
                                <?php } }?> 
  </tbody>

    </table>
</body>
</html>