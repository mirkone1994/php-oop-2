<?php require_once __DIR__ . '/models/User.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <section id="user">
            <?php $user = new User('Mirko', 'Chiappori', 'Piazza Manin 1/2, Genova, 16137', '1234 5678 0000 0000'); ?>
            <h2><?= $user->getFullName(); ?></h2>
            <h2><?= $user->getAddress(); ?></h2>
        </section>
    </main>
</body>
</html>