<?php include './header.php';?>
<div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>If You have any questions you can write to us</p>
  </div>
  <div class="row">
    <div class="contacts">
      <img src="./images/icon.jpg" style="width:20%">    
  <h3>Phone Number:000000000</h3> 
  <h3>Email:xyz@gmail.com</h3>  
    </div>
    <div class="column">
      <form action="/action_page.php">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <br><label for="email">Your Email</label>
        <input type="email" id="email" name="email" placeholder="Your email..">
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>

<?php include './footer.php';?>