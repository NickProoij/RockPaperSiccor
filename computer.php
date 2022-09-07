<?php

function spelen($speler_1, $speler_2)
{
    // 0 = papier
    // 1 = steen
    // 2 = schaar
    $gewonnen = array(1, 2, 0);


    // if speler_1 is niet speler_2 kijk dan of speler_1 0 2 of 1 in de array is en kijk dan of je 1 0 of 2 returned
    // Waar je de functie aanroept kijk je of return 0, 1, 2 is en dan print je steen, papier of schaar

    return ($speler_1 != $speler_2) ? ($gewonnen[$speler_1] == $speler_2) ? 1 : 0 : 2;
}
?>

<!DOCTYPE HTML>
<html>


<head>
    <title>Steen Papier Schaar - Computer</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-indigo-600">


    <?php
    if (isset($_POST['keuze'])) {
        $jij = $_POST['keuze'];
        $computer = rand(0, 2);

        if ($computer == 0) {
            echo 'De computer had steen';
        } elseif ($computer == 1) {
            echo 'De computer had schaar';
        } elseif ($computer == 2) {
            echo 'De computer had papier';
        }

        if ($jij == 0) {
            echo ' en jij had steen';
        } elseif ($jij == 1) {
            echo ' en jij had schaar';
        } elseif ($jij == 2) {
            echo ' en jij had papier';
        }
    ?>
        <br /><br />
        <?php
        if (spelen($jij, $computer) == 0) {
        ?>
            <span id="Verloren" class="text-red-500 font-bold flex justify-center mt-5">Verloren</span>
        <?php
        } elseif (spelen($jij, $computer) == 1) {
        ?>
            <span class="text-green-500 font-bold flex justify-center mt-5">Gewonnen</span>
        <?php
        } elseif (spelen($jij, $computer) == 2) {
        ?>
            <span id="Gelijkspel" class="text-yellow-500 font-bold flex justify-center mt-5">Gelijkspel</span>
        <?php
        }
        ?>
        <br /><br />


        <a href="index.php" class="text-gray-400 font-bold text-center flex justify-center mt-5">Speel nog eens!</a>
    <?php
    } else {
    ?>

        <h3 class="text-white text-3xl text-center font-bold">Steen Papier Schaar</h3>

        <h2 class="text-2xl text-white text-center font-bold mt-5"> Kies hier je optie: </h2>
        <div class="text-center mt-20">
            <form method="post">
                <button value="0" name="keuze" class="mr-14"><img src="img/steen.png"></button>
                <button value="2" name="keuze" class="mr-14"><img src="img/papier.png"></button>
                <button value="1" name="keuze"><img src="img/schaar.png"></button>

            </form>
        </div>

    <?php
    }

    ?>

    <footer class="mt-96">
        <p class="text-center align-bottom text-white font-bold">© 2021 Steen Papier Schaar, Erhan & Nick</p>
    </footer>

</body>


</html>