<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Rétractable</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Bouton pour ouvrir/fermer la sidebar -->
    <button id="btn">&#9776;</button>

    <!-- Sidebar -->
    <div class="sidebar">
        <p>Menu Item 1</p>
        <p>Menu Item 2</p>
        <p>Menu Item 3</p>
    </div>
    <h1 id="sum"></h1>
    <h2 id="mult"></h2>

    <?php
    $nb = 0;
    for ($i=0; $i >= 7 && $i <= 9; $i++) { 
        for ($j=1; $j >= 1 && $j<=3; $j++) { 
            echo $i*$j;
        }
    }
    ?>

    <script src="com.js"></script>
</body>
</html>
