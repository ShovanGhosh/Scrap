<?php include './header.php';?>
<div class="container_login">
 <h1> User Login  </h1>    
    <form name="login" action="login_action.php " method="post">  
        <div class="container_login">   
            <div class="uname"><label>Username : </label>   
            <input type="text" placeholder="Enter Username" name="userName" id="userName" required> </div> 
            <div class="pwd"><label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="password" id="password"required> </div> 
            <div><button type="submit" name="login_btn">Login</button> 

           <input type="checkbox" checked="checked"> Remember me   
            <button type="button" class="cancelbtn"> Cancel</button>   
            Forgot <a href="#"> password? </a>  </div>  
        </div>   
    </form>
</div>

<?php include './footer.php';?>