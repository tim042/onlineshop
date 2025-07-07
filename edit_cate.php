<?php
    $id = $_GET['cate_id'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Online Shop</title>
        <?php include("./link.php"); ?>
    </head>
    <body>
        <?php include('menu.php'); ?>
        <div class="container" style="margin-top:80px">
            <h1 class="center">Edit Category</h1>
            <div class="row">
                <?php
                $select = "SELECT * FROM category WHERE id = $id";
                $result = mysqli_query($connect_db, $select);
                while($row_cate = mysqli_fetch_assoc($result)){ ?>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="">Category Name</label>
                        <input type="text" class="form-control" value="<?=$row_cate['name']?>" name="cate_name" max="50">
                        <small class="form-text text-muted">Type Category Name (less than 50)</small>
                    </div>
                    <div class="form-group">
                        <label for="">Parent ID</label>
                        <input type="number" class="form-control" value="<?=$row_cate['parent_id']?>" name="parent_id" max="99">
                        <small class="form-text text-muted">Type Parent ID (less than 2)</small>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Save" name="btn-save">
                    </div>
                </form>
                <?php }  
                    if(isset($_POST['btn-save'])){
                        $name = $_POST['cate_name'];
                        $p_id = $_POST['parent_id'];
                        $update = "UPDATE category SET parent_id='$p_id',name='$name' WHERE id = $id";
                        if(mysqli_query($connect_db, $update)){
                            echo "Update data successs !";
                        }else{
                            echo "Error: ". mysqli_error($connect_db);
                        }
                        mysqli_close($connect_db);
                    }
                ?>
            </div>
        </div>
    </body>
</html>