<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Select Sales</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>ລໍາດັບ</th>   <th>ວັນທີຊື້</th>   <th>ລູກຄ້າ</th>   <th>ເບີໂທ</th>   <th>ສິນຄ້າ</th>  <th>ຈໍານວນ</th>            
            <th>ລາຄາ</th>    <th>ລວມ</th>
        </tr>
    <?php
        $selectSales = "SELECT s.*, p.name AS p_name, p.price, u.name AS u_name, u.telephone FROM `sales` AS s JOIN product AS p ON (s.product_id = p.id) JOIN users AS u ON (s.user_id=u.id) ORDER BY s.sales_date DESC";
        $result = mysqli_query($connect_db, $selectSales);
        if($result->num_rows>0){
            $no = 1;
            while($row = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <td><?=$no++?></td>
                    <td><?=$row['sales_date']?></td>
                    <td><?=$row['u_name']?></td>
                    <td><?=$row['telephone']?></td>
                    <td><?=$row['p_name']?></td>
                    <td><?=$row['amount']?></td>
                    <td><?=$row['price']?></td>
                    <td><?=$row['amount']*$row['price']?></td>
                </tr>
                <?php
            }
        }else{ ?>
            <tr>
                <td colspan="7">No Data</td>
        <?php }

    ?>
    </table>
</body>
</html>