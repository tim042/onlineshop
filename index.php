<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Online Shop</title>
        <?php include("./link.php"); ?>
    </head>
    <body>
        <?php include('menu.php'); ?>
        <div class="container-fluid" style="margin-top:80px">
        <!-- ##### -->
            <div class="row">
                <?php
                $select_p = "SELECT * FROM product ORDER BY id DESC";
                $result = mysqli_query($connect_db, $select_p);
                while($row_p = mysqli_fetch_assoc($result)){
                    ?>
                    <div class="p_box col-sm-3"> <!-- Red box -->
                        <div class="image"><img src="./img/<?=$row_p['picture']?>" alt=""></div>
                        <div class="p_name"><?=$row_p['name']?></div>
                        <div class="p_desc"><?=$row_p['description']?></div>
                        <div class="p_price">$ <?=$row_p['price']?></div>
                        <div class="p_btn">
                            <a href="product_detail.php?d&&id=<?=$row_p['comm_id']?>" class="btn btn-primary">$ <?=$row_p['price']?></a>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        <!-- ##### -->
        </div>

    </body>

</html>