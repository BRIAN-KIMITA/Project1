 
    <?php

require_once 'includes/header.php';

    ?>
<div>
   <h1>Register</h1>
     <p>Already have an account?<a href="login.php">Login!</a></p>
 <form action="includes/register-inc.php" method="post">
 <input type="text" name="username" placeholder="username"><br>
 <input type="password" name="password" placeholder="password"><br>
 <input type="password" name="confirmpassword" placeholder="confirmpassword"><br>

 <button type="submit" name="submit">Register</button>
</div>


</form>
       <?php

require_once 'includes/footer.php';

    ?>
    
