<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Online Shop</title>
        <?php include("./link.php"); ?>
    </head>
    <body>
        <?php include('menu.php'); ?>
        <div class="container" style="margin-top:80px">
            <h1 class="center">Add Customer</h1>
            <div class="row">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="">name</label>
                        <input type="text" class="form-control" name="name">
                        <small class="form-text text-muted">Type Customer Name (less than 50)</small>
                    </div>
                    <div class="form-group">
                        <label for="">address</label>
                        <input type="text" class="form-control" name="address">
                        <small class="form-text text-muted">Type Parent ID (less than 2)</small>
                    </div>
                    <div class="form-group">
                        <label for="">email</label>
                        <input type="email" class="form-control" name="email">
                        <small class="form-text text-muted">Type Parent ID (less than 2)</small>
                    </div>
                    <div class="form-group">
                        <label for="">telephone</label>
                        <input type="number" class="form-control" name="telephone">
                        <small class="form-text text-muted">Type Parent ID (less than 2)</small>
                    </div>
                    <div class="form-group">
                        <label for="">userName</label>
                        <input type="text" class="form-control" name="userName">
                        <small class="form-text text-muted">Type Parent ID (less than 2)</small>
                    </div>
                    <div class="form-group">
                        <label for="">password</label>
                        <input type="pass" class="form-control" name="password">
                        <small class="form-text text-muted">Type Parent ID (less than 2)</small>
                    </div>
                    <div class="form-group">
                        <label for="">card_type</label>
                        <input type="number" class="form-control" name="card_type">
                        <small class="form-text text-muted">Type Parent ID (less than 2)</small>
                    </div>
                    <div class="form-group">
                        <label for="">card_number</label>
                        <input type="number" class="form-control" name="card_number">
                        <small class="form-text text-muted">Type Parent ID (less than 2)</small>
                    </div>
                    <div class="form-group">
                        <label for="">card_date</label>
                        <input type="date" class="form-control" name="card_date">
                        <small class="form-text text-muted">Type Parent ID (less than 2)</small>
                    </div>
                    <div class="form-group">
                        <label for="">level</label>
                        <input type="number" class="form-control" name="level">
                        <small class="form-text text-muted">Type Parent ID (less than 2)</small>
                    </div>
                    <div class="form-group" style="margin-bottom: 50px;">
                        <input type="submit" class="btn btn-primary" value="Save" name="btn-save">
                    </div>
                </form>
            </div>
        </div>
        <?php
            if(isset($_POST['btn-save'])){
                $name = $_POST['name'];
                $address = $_POST['address'];
                $email = $_POST['email'];
                $telephone = $_POST['telephone'];
                $username = $_POST['userName'];
                $password = $_POST['password'];
                $card_type = $_POST['card_type'];
                $card_number = $_POST['card_number'];
                $card_date = $_POST['card_date'];
                $level = $_POST['level'];
                
                $sql_insert = "INSERT INTO users(name, address, email, telephone, username, password, card_type, card_number, card_expiration_date, level) VALUES ('$name','$address','$email','$telephone','$username','$password','$card_type','$card_number','$card_date','$level')";
                if($connect_db->query($sql_insert) == true){
                    echo "Install data Success !";
                }else{
                    echo "Error :". $sql_insert ."<br>". $connect_db->error."<br>";
                }
            }
        ?>
    </body>
</html>