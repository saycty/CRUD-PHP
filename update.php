<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
<?php
include("config.php");
if (isset ($_GET['id'])){
    $id=$_GET['id'];
    
}
$result=mysqli_query($mysqli,"SELECT * from record where id='$id'");
while($res=mysqli_fetch_array($result)){
    $name=$res['name'];
    $email=$res['email'];
    $address=$res['address'];
    $date=$res['date'];
    $password=$res['password'];
}
?>
<?php
if(Isset($_POST['update'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $date=$_POST['date'];
    $password=$_POST['password'];
    $result=mysqli_query($mysqli,"update record SET name='$name',email='$email',address='$address',date='$date',password='$password' where id='$id'");
    if($result){
        $_SESSION['status3']="update successfull";

        header("location:read.php");

    }
else{
        echo"failed";
    }
}
?>

<form action="update.php" method="POST">
    <div class="container">
        <h2>Update Form</h2>
        <div class="form-container">
            
                <input type="hidden" name="id" value="<?php echo $id ;?>">


                <div class="input-name">
                <label for="name">Name</label>
                <input type="text" placeholder="Name" name="name" value="<?php echo $name; ?>">
                </div>

                <div class="input-name">
                <label for="email">Email</label>
                <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>">
                </div>

                <div class="input-name">
                <label for="address">Address</label>
                <input type="address" placeholder="address" name="address" value="<?php echo $address; ?>">
                </div>

                <div class="input-name">
                <label for="date">Date</label>
                <input type="date" placeholder="date" name="date" value="<?php echo $date; ?>">
                </div>

                <div class="input-name">
                <label for="password">Password</label>
                <input type="password" placeholder="password" name="password" value="<?php echo $password; ?>">
                </div>
                <button type="submit" class="submit" name="update">update</button>
    </form>
</body>
</html>