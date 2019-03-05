<?php include 'templates/header.view.php' ?>

<?php if(isset($msg)) echo $msg ?>

<h2>Register</h2>

<form action="/register" method="POST">
    <label for="email">Email:</label>
    <input type="email" name="email" id="email">
    <label for="password">Password:</label>
    <input type="password" name="password" id="password">
    <label for="passwordConfirm">Confirm Password:</label>
    <input type="password" name="passwordConfirm" id="passwordConfirm">

    <input type="submit" value="Register">
</form>

<?php include 'templates/footer.view.php' ?>
