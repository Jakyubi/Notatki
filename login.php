<?php require 'topPage.php';?>


    <div id="logInForm">
    <form action="login2.php" method="post">
    <h3>Login Here</h3>
        <input type="text" name="username" id="username" placeholder="username">
        <input type="text" name="password" id="password" placeholder="password">
        <input type="submit" name="submit" value="LOGIN">
        
    </form>
        <h4>WANT TO REGISTER NEW ACCOUNT? <a href="register.php" >click here</a></h4>
    </div>

    <?php require 'bottomPage.php';?>