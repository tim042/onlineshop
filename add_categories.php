<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Online Shop</title>
        <?php include("./link.php"); ?>
    </head>
    <body>
        <?php include('menu.php'); ?>
        <div class="container-fluid" style="margin-top:80px">
            <h1 class="center">Add Category</h1>
            <div class="row">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="">Category Name</label>
                        <input type="text" class="form-control" name="cate_name" max="50">
                        <small class="form-text text-muted">Type Category Name (less than 50)</small>
                    </div>
                    <div class="form-group">
                        <label for="">Parent ID</label>
                        <input type="number" class="form-control" name="parent_id" max="99">
                        <small class="form-text text-muted">Type Parent ID (less than 2)</small>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Save" name="btn-save">
                    </div>
                </form>
            </div>
        </div>
        <?php
            if(isset($_POST['btn-save'])){
                $name = $_POST['cate_name'];
                $p_id = $_POST['parent_id'];
                $sql_insert = "INSERT INTO category(parent_id, name) VALUES ($p_id,'$name')";
                if($connect_db->query($sql_insert) == true){
                    echo "Inster data Success !";
                }else{
                    echo "Error :". $sql_insert ."<br>". $connect_db->error."<br>";
                }
            }
        ?>
    </body>
</html>