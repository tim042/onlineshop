<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Online Shop</title>
        <?php include("./link.php"); ?>
    </head>

    <body>
        <?php include('menu.php'); ?>
        <div class="container-fluid" style="margin-top:80px">
            <h1 class="center">Categories</h1>
            <div class="row">
                <div class="insert-date">
                    <a href="add_categories.php" class="btn btn-success">Add Categories</a>
                </div>
                <div class="show-list">
                    <table class="table table-hover" style="margin-top: 20px;">
                        <thead style="background-color:#0080ff; color: #ffffff;">
                            <tr>
                                <th class="center">No.</th>
                                <th class="center">Categories Name</th>
                                <th class="center">Parents ID</th>
                                <th width="10%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no = 1;
                                $select_cate = "SELECT * FROM category ORDER BY name ASC";
                                $result = mysqli_query($connect_db, $select_cate);
                                while($row_cate = mysqli_fetch_assoc($result)){
                                    ?>
                            <tr>
                                <td class="center"><?=$no++?></td>
                                <td><?=$row_cate['name']?></td>
                                <td><?=$row_cate['parent_id']?></td>
                                <td>
                                    <a href="edit_cate.php?d&cate_id=<?=$row_cate['id']?>"
                                        class="btn btn-primary">Edit</a>
                                    <a href="delete_cate.php?d&cate_id=<?=$row_cate['id']?>"
                                        class="btn btn-danger">Delete</a>
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