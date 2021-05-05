<?php
    include_once 'header.php';
?>
            <section class="index-intro">
                <h2> Sign Up</h2>
                <form action="includes/login.inc.php" method="POST">
                    <input type="text" name='uid' placeholder='User Name/Email'> 
                    <br>
                    <input type="password" name='pwd' placeholder='Password'> 
                    <br>
                    <button type='submit' name='submit'> Log In</button>
                </form>
            </section> 


        
      <?php
        include_once 'footer.php'; 
        ?>