<?php

session_start();

?>


<!DOCTYPE HTML>
<html>


<head>
    <title>Steen Papier Schaar - Multiplayer</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-indigo-600">

    <?php
    if (isset($_POST['keuze'])) {
        $_SESSION['keuze'] = $_POST['keuze'];
        header('Location: game.php');
    }
    ?>

    <h3 class="text-white text-3xl text-center font-bold">Steen Papier Schaar</h3>

    <h2 class="text-2xl text-white text-center font-bold mt-5"> Speler 1, kies hier je optie: </h2>

    <div class="text-center mt-20">
        <form method="POST">
            <button value="0" name="keuze" class="mr-14"><img src="img/steen.png"></button>
            <button value="2" name="keuze" class="mr-14"><img src="img/papier.png"></button>
            <button value="1" name="keuze"><img src="img/schaar.png"></button>

        </form>
    </div>


    <footer class="mt-80">
        <p class="text-center align-bottom text-white font-bold">© 2021 Steen Papier Schaar, Erhan & Nick</p>
    </footer>
</body>


</html>