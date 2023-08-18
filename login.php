<?php include './header.php';?>
<div class="container_login">
 <h1> User Login  </h1>    
    <form>  
        <div class="container_login">   
            <div><label>Username : </label>   
            <input type="text" placeholder="Enter Username" name="username" required> </div> 
            <div><label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="password" required> </div> 
            <div><button type="submit">Login</button>   
           <input type="checkbox" checked="checked"> Remember me   
            <button type="button" class="cancelbtn"> Cancel</button>   
            Forgot <a href="#"> password? </a>  </div>  
        </div>   
    </form>
</div>
<?php include './footer.php';?>