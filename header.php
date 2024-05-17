<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT-Spēks</title>
    <link rel="stylesheet" href="assets/style_main.css">
    <script src="../assets/script.js" defer></script>
    
</head>
<body>
    <!-- https://kristovskis.lv/3pt1/cariks/IT-Speks/index.html -->
    <header>
        <a href="#" class="logo">IT-Spēks</a>
        <nav class="navbar">
            <a href="index.php" class="<?php echo($page == 'sakums1' ? 'current' : ''); ?>">Sākumlapa</a>
            <a href="aktualitates.php" class="<?php echo($page == 'aktualitates' ? 'current' : ''); ?>">Aktualitātes</a>
            <a href="vakances.php" class="<?php echo($page == 'vakances' ? 'current' : ''); ?>">Vakances</a>
            <a href="pieteiksanas.php" class="<?php echo($page == 'pieteiksanas' ? 'current' : ''); ?>">Pieteikšanās lapa</a>
            <a href="kontakti.php" class="<?php echo($page == 'kontakti' ? 'current' : ''); ?>">Kontakti</a>
        </nav>
    </header>