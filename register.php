<?php require 'topPage.php';?>
    <!-- form to register new user -->
    <div id="logInForm">
    <h3>Register Here</h3>
    <form action="register2.php" method="post" >
        <input type="text" name="username" id="" placeholder="username">
        <input type="text" name="password" id="" placeholder="password">
        <input type="submit" name="submit" value="REGISTER">
    </form>
    <h4>WANT TO GO BACK TO LOGIN PAGE?<a href="login.php" > click here</a></h4>
    </div>
    <?php require 'bottomPage.php';?>