<?php
session_start();
include 'connection_db.php';
/*new*/
if(isset($_POST['userName'])&& isset($_POST['password'])){
    function validate($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }

}
$uname=validate($_POST['userName']);
$pass=validate($_POST['password']);
if(empty($uname)){
    header("Location:login.php?error=username is required");
    exit();
}else if(empty($pass)){
    header("Location:login.php?error=password is required");
    exit();
}
$sql = "SELECT * FROM `login` WHERE name='$uname' AND Password='$pass';";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)===1){
    $row=mysqli_fetch_assoc($result);
    if($row['Name']===$uname && $row['Password']===$pass){
        echo "Logged in";
        $_SESSION['Name']=$row['Name'];
        $_SESSION['Password']=$row['Password'];
        $_SESSION['id_single']=$row['id_single'];
        $_SESSION['Email']=$row['Email'];
        header("Location:products_update.php");
    }

else{
    header("Location:login.php?error=incorrect username or password");
    exit();
}
}
else{
    header("Location:login.php");
    exit();
}
/*new*/
/*
  if(!empty($_POST["login_btn"])) { 
    $userName = $_POST("userName");
    $password = $_POST("password");
echo $password;
echo $userName;
$sql = "SELECT name,Password FROM `login` WHERE 1;";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
while($row = mysqli_fetch_array($result)) {
    if( $row['Name']==$userName && $row['Password']==$password) 
    echo "success";
    header("Location: ./products_update.php");
    exit();
}
}*/
?> 