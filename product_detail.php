<?php
    $p_id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product Detail</title>
    <?php include('./link.php'); ?>
</head>
<body>
    <?php include('./menu.php'); ?>
    <div class="container-fluid" style="margin-top:80px">
    <?php
        $select = "SELECT * FROM product WHERE id = $p_id";
        $result = mysqli_query($connect_db, $select);
        while($row = mysqli_fetch_assoc($result)){
            ?>
            <div class="row">
                <div class="col-sm-5">
                    <div class="pd_img">
                        <img src="./img/<?=$row['picture']?>" alt="">
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="pd_name"><?=$row['name']?></div>
                    <div class="pd_desc"><?=$row['description']?></div>
                    <div class="pd_price"><?=$row['price']?></div>
                    <div class="pd_btn">
                        <form action="" method="post">
                            <input type="submit" value="Buy" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
            <?php
        }
        mysqli_close($connect_db);
    ?>
    </div>
</body>
</html>