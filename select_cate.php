<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
        <?php
            $selectData = "SELECT product.id, product.name,category.name FROM product INNER JOIN category on product.id = category.id";
            $result = mysqli_query($connect_db, $selectData);
            if($result->num_rows>0){
                while ($row = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                    <td><?=$row['name']?></td>
                        <td><?=$row['name']?></td>
                    </tr>
                    <?php
                }
            }else{
                echo "No data";
            }
            mysqli_close($connect_db);
        ?>
    </table>
</body>
</html>