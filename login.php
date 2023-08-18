<?php include './header.php';?>
<?php
  if(isset($_POST['login_btn'])) { 
    $UserName = $_GET("UserName");
    $Password = $_GET("Password");
    echo $UserName;
    echo $Password;
include 'connection_db.php';
$sql = "SELECT name,Password FROM `login` WHERE 1;";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
while($row = mysqli_fetch_array($result)) {
    if( $row['Name']==$UserName && $row['Password']==$Password) 
    echo "success";
    header('./products_update.php');
}
}
?>  
<div class="container_login">
 <h1> User Login  </h1>    
    <form action=" " method="get">  
        <div class="container_login">   
            <div><label>Username : </label>   
            <input type="text" placeholder="Enter Username" name="username" id="UserName" required> </div> 
            <div><label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="password" id="Password"required> </div> 
            <div><button type="submit" name="login_btn">Login</button> 

           <input type="checkbox" checked="checked"> Remember me   
            <button type="button" class="cancelbtn"> Cancel</button>   
            Forgot <a href="#"> password? </a>  </div>  
        </div>   
    </form>
</div>
<?php include './footer.php';?>