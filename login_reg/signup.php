<?php 
    require "header.php";
?>

<main>
<div class="wrapper-main">
    <section class="section-default">       
    <h1>Signup</h1>
    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="userID" placeholder="Username">
        <input type="text" name="mail" placeholder="Email"> 
        <input type="password" name="pwd" placeholder="Password">
        <input type="password" name="pwd-confirm" placeholder="Confirm Password">
        <button type="submit" name="signup-button">Signup</button>
    </form>
    </section>
</div>
</main>

<?php
require "footer.php";
?>