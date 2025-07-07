<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Online Shop</title>
        <?php include("./link.php"); ?>
    </head>

    <body>
        <?php include('menu.php'); ?>
        <div class="container-fluid" style="margin-top:80px">
            <h1>Customer</h1>
            <div class="row">
                <div class="insert-date">
                    <a href="add_customer.php" class="btn btn-success">Add Customer</a>
                </div>
                <div class="show-list">
                    <table class="table table-hover" style="margin-top: 20px;">
                        <thead style="background-color:#0080ff; color: #ffffff;">
                            <tr>
                                <th class="center">No.</th>
                                <th class="center">Name</th>
                                <th class="center">Email</th>
                                <th class="center">Telephon</th>
                                <th class="center">Card type</th>
                                <th width="10%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no = 1;
                                $select = "SELECT * FROM users ORDER BY id DESC";
                                $result = mysqli_query($connect_db, $select);
                                while($row = mysqli_fetch_assoc($result)){
                                    ?>
                                <tr>
                                    <td class="center"><?=$no++?></td>
                                    <td><?=$row['name']?></td>
                                    <td><?=$row['email']?></td>
                                    <td><?=$row['telephone']?></td>
                                    <td><?=$row['card_type']?></td>
                                    <td>
                                        <a href="edit_customer.php?d=cate_id=<?=$row['id']?>" class="btn btn-primary">Edit</a> 
                                        <a href="delete_customer.php?d=cate_id=<?=$row['id']?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                    <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>

</html>