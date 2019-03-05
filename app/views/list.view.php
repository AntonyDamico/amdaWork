<?php include 'templates/header.view.php' ?>

    <h1>Contact List</h1>

    <ul>
        <?php foreach ($contacts as $contact): ?>
            <li>
                <a href="/contacts/read?id=<?= $contact->id ?>">
                    <?= $contact->first_name . ' ' . $contact->last_name ?>
                </a>
            </li>
        <?php endforeach ?>
    </ul>

<?php include "templates/footer.view.php";