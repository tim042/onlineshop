<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Online Shop</title>
        <?php include("./link.php"); ?>
    </head>
    <body>
        <?php include('menu.php'); ?>
        <div class="container" style="margin-top:80px">
        <h1 class="center">Add Product</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Category</label>
                <select name="cate" class="form-control">
                    <option value="">-- Please Select Category</option>
                    <?php
                        $select_cate = "SELECT * FROM category ORDER BY name ASC";
                        $result_cate = mysqli_query($connect_db, $select_cate);
                        while($row_cate = mysqli_fetch_assoc($result_cate)){
                            ?><option value="<?=$row_cate['id']?>"><?=$row_cate['name']?></option><?php
                        }
                    ?>
                </select>
                <small class="form-text text-muted">Select Category Name</small>
            </div>
            <div class="form-group">
                <label for="">Product Name</label>
                <input type="text" class="form-control" name="p_name">
                <small class="form-text text-muted">Type Product Name</small>
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" name="p_desc">
                <small class="form-text text-muted">Type Description</small>
            </div>
            <div class="form-group">
                <label for="">Price</label>
                <input type="number" class="form-control" name="p_price">
                <small class="form-text text-muted">Type price</small>
            </div>
            <div class="form-group">
                <label for="">Stock</label>
                <input type="number" class="form-control" name="p_stock">
                <small class="form-text text-muted">Type Stock</small>
            </div>
            <div class="form-group">
                <label for="">Picture</label>
                <input type="file" class="form-control" name="p_file">
                <small class="form-text text-muted">Select Picture</small>
            </div>
            <div class="form-group" style="margin-bottom: 50px;">
                <input type="submit" class="btn btn-primary" value="Save" name="btn-save">
            </div>
        </form>
        <?php
            if(isset($_POST['btn-save'])){
                $cate = $_POST['cate'];
                $name = $_POST['p_name'];
                $desc = $_POST['p_desc'];
                $price = $_POST['p_price'];
                $stock = $_POST['p_stock'];
                $img = $_FILES['p_file']['name'];
                $target = "img/";
                $target_file = $target.basename($img); //       img/2.jpg
                $form_flie = $_FILES['p_file']['tmp_name'];  //   download/2.jpg

                $insert = "INSERT INTO `product`(`category_id`, `name`, `description`, `price`, `stock`, `picture`) VALUES ('$cate','$name','$desc','$price','$stock','$img')";
                if($connect_db->query($insert) == True){
                    move_uploaded_file($form_flie, $target_file);
                    echo "Insert Data Success !";
                }else{
                    echo "Error:". $insert . "<br>". $connect_db->error;
                }
            }
        ?>
    </div>
    </body>
</html>