<?php include 'templates/header.view.php' ?>

<h1>Contact ID: <?= $contact->id ?></h1>
<h3><?= $contact->first_name . ' ' . $contact->last_name ?></h3>
<p>Created at <?= $contact->created_at ?></p>

<?php include 'templates/footer.view.php' ?>
