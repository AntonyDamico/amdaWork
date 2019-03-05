<?php require 'templates/header.view.php'?>

<h2>Create Contacts</h2>

<form action="/contacts/add" method="POST">
    <label for="firstName">First Name:</label>
    <input type="text" name="firstName" id="firstName">

    <label for="lastName">Last Name:</label>
    <input type="text" name="lastName" id="lastName">

    <input type="submit" value="Submit">
</form>

<?php include 'templates\footer.view.php' ?>
