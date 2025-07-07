<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Select Product</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>ລໍາດັບ</th>
            <th>ປະເພດສິນຄ້າ</th>
            <th>ຊື່ສິນຄ້າ</th>
            <th>ລາຍລະອຽດ</th>
            <th>ລາຄາ</th>
            <th>ຈໍານວນ</th>
            <th>ຮູບພາບ</th>
        </tr>
    <?php
        $selectProduct = "SELECT p.*, c.name AS c_name FROM product as p JOIN category AS c ON p.category_id = c.id ORDER BY id ASC";
        $result = mysqli_query($connect_db, $selectProduct);
        if($result->num_rows>0){
            $no = 1;
            while($row = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <td><?=$no++?></td>
                    <td><?=$row['c_name']?></td>
                    <td><?=$row['name']?></td>
                    <td><?=$row['description']?></td>
                    <td><?=$row['price']?></td>
                    <td><?=$row['stock']?></td>
                    <td><?=$row['picture']?></td>
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