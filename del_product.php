<?php
    include('config.php');
    include('link.php');
    $product_id = $_GET['id'];
    $delete = "DELETE FROM product WHERE id = $product_id";
    if(mysqli_query($connect_db, $delete)){
        echo "Delete Data Success ! <br>";
        echo "<a href='product.php' class='btn btn-primary'>Product</a>";
    }else{
        echo "Error: " . mysqli_error($connect_db);
    }
    mysqli_close($connect_db);
?>