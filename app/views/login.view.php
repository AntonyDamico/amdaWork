<?php include 'templates/header.view.php' ?>

<?php if(isset($msg)) echo $msg ?>

<h2>Log In</h2>

<form action="" method="POST">
    <label for="email">Email:</label>
    <input type="email" name="email" id="email">
    <label for="password">Password:</label>
    <input type="password" name="password" id="password">

    <input type="submit" value="Login">
</form>

<?php include 'templates/footer.view.php' ?>
