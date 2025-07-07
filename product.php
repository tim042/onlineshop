<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Online Shop</title>
        <?php include("./link.php"); ?>
    </head>
    <body>
        <?php include('menu.php'); ?>
        <div class="container" style="margin-top:80px">
            <h1 class="center">product</h1>
            <p><a href="add_product.php" class="btn btn-success">Add Product</a></p>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No</th>  <th>Name</th>  <th>Category</th>  <th>Price</th>
                    <th>stock</th>  <th>Picture</th>  <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $select = "SELECT a.*, b.name AS cate_name FROM product AS a JOIN category AS b ON (a.category_id = b.id) ORDER BY a.id DESC";
                $result = mysqli_query($connect_db, $select);
                $no = 1;
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <td class="center"><?=$no++?></td>
                        <td><?=$row['name']?></td>
                        <td><?=$row['cate_name']?></td>
                        <td><?=$row['price']?></td>
                        <td><?=$row['stock']?></td>
                        <td><img src="./img/<?=$row['picture']?>" alt="" style="height: 20px;"></td>
                        <td>
                            <a href="edit_product.php?d&id=<?=$row['id']?>" class="btn btn-primary">Edit</a>
                            <a href="del_product.php?d&id=<?=$row['id']?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        </div>
    </body>

</html>