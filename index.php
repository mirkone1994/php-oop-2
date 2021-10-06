<?php require_once __DIR__ . '/models/Vip.php';
 require_once __DIR__ . '/models/User.php' ?>
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

        <section id="vip">
            <?php $vip = new Vip('Lorenzo', 'Cazzola', 'Largo Giardino 4/7, Genova, 16137', '9876 5432 1111 1111', 1) ?>
            <h2><?= $vip->getFullName(); ?></h2>
            <p>Il tuo sconto VIP è <?= $vip->getDiscount() ?>%</p>
        </section>
    </main>
</body>
</html>