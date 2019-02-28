<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>

<h1>Welcome</h1>

<ul>
<?php foreach ($contacts as $contact): ?>
    <li><?= $contact->first_name . ' ' . $contact->last_name ?></li>
<?php endforeach ?>
</ul>

</body>
</html>