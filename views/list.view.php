<?php include 'templates/header.view.php' ?>

<h1>Contact List</h1>

<ul>
    <?php foreach ($contacts as $contact): ?>
        <li><?= $contact->first_name . ' ' . $contact->last_name ?></li>
    <?php endforeach ?>
</ul>

<?php include "templates/footer.view.php";