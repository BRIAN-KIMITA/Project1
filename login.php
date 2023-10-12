 
    <?php

require_once 'includes/header.php';

    ?>
<div>
   <h1>Log in</h1>
     <p>No account?<a href="register.php">Register Here!</a></p>
 <form action="includes/login-inc.php" method="post">
 <input type="text" name="username" placeholder="username"><br>
 <input type="password" name="password" placeholder="password"><br>
 <button type="submit" name ="submit">LOGIN</button>
</div>


</form>
       <?php

require_once 'includes/footer.php';

    ?>
    
