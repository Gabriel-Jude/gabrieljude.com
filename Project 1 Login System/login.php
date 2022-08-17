

<?php 

include_once 'header.php';

?>


<section> 
<!-- Clean up style later -->

<h2>
        Log In
        <form 
        action="login.inc.php" method = "post">
        <input type = "text" name = "name" placeholder = "Username/Email ...">
        <input type = "password" name = "pwd" placeholder = "Password ...">
        <button type = "submit" name = "submit">Log In</button>
        </form>
    </h2>
</section>





<?php 

include_once 'footer.php';

?>


