<?php

session_start();

function spelen($speler_1, $speler_2)
{
    $gewonnen = array(1, 2, 0);

    return ($speler_1 != $speler_2) ? ($gewonnen[$speler_1] == $speler_2) ? 1 : 0 : 2;
}
?>

<!DOCTYPE HTML>
<html>


<head>
    <title>Steen Papier Schaar - Multiplayer</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-indigo-600">


    <?php
    if (isset($_POST['keuze2'])) {
        $Speler1 =  $_SESSION['keuze'];
        $Speler2 = $_POST['keuze2'];
    ?>

        <?php
        if ($Speler1 == 0) {
        ?>

            <span class="font-bold text-center flex justify-center text-white mt-5">Speler 1 had steen,</span>

        <?php
        } elseif ($Speler1 == 1) {
        ?>

            <span class="font-bold text-center flex justify-center text-white mt-5">Speler 1 had schaar,</span>

        <?php
        } elseif ($Speler1 == 2) {
        ?>
            <span class="font-bold text-center flex justify-center text-white mt-5">Speler 1 had papier,</span>

        <?php
        }
        ?>

        <?php

        if ($Speler2 == 0) {
        ?>
            <span class="font-bold flex justify-center text-white mt-5">Speler 2 had steen</span>
        <?php
        } elseif ($Speler2 == 1) {
        ?>
            <span class="font-bold flex justify-center text-white mt-5">Speler 2 had schaar</span>
        <?php
        } elseif ($Speler2 == 2) {
        ?>
            <span class="font-bold flex justify-center text-white mt-5">Speler 2 had papier</span>
        <?php
        }
        ?>

        <div class="multiplayer">
            <?php
            if (spelen($Speler1, $Speler2) == 0) {
            ?>
                <div class="color-red-500">
                    <span class="text-red-500 font-bold flex justify-center mt-5">Speler 1 heeft Verloren</span>
                <?php
            }
            if (spelen($Speler2, $Speler1) == 0) {
                ?>
                    <div class="color-red-500">
                        <span class="text-red-500 font-bold flex justify-center mt-5">Speler 2 heeft Verloren</span>
                    <?php
                }
                if (spelen($Speler1, $Speler2) == 1) {
                    ?>
                        <div class="">
                            <span class="text-green-500 font-bold flex justify-center mt-5">Speler 1 heeft Gewonnen</span>
                        </div>
                    <?php
                }
                if (spelen($Speler2, $Speler1) == 1) {
                    ?>
                        <div class="color-green-500">
                            <span class="text-green-500 font-bold flex justify-center mt-5">Speler 2 heeft Gewonnen</span>
                        </div>
                    <?php
                } else if (spelen($Speler1, $Speler2) == 2) {
                    ?>
                        <div class="color-blue">
                            <span class="text-yellow-500 font-bold flex justify-center mt-5">Gelijkspel</span>
                        </div>
                    <?php
                }
                    ?>
                    </div>


                    <a href="index.php" class="text-gray-400 font-bold text-center flex justify-center mt-5">Speel nog eens!</a>
                <?php
            } else {
                ?>


                    <h3 class="text-white text-3xl text-center font-bold">Steen Papier Schaar</h3>

                    <h2 class="text-2xl text-white text-center font-bold mt-5"> Speler 2, kies hier je optie: </h2>
                    <div class="text-center mt-20">
                        <form method="POST">
                            <button value="0" name="keuze2" class="mr-14"><img src="img/steen.png"></button>
                            <button value="2" name="keuze2" class="mr-14"><img src="img/papier.png"></button>
                            <button value="1" name="keuze2"><img src="img/schaar.png"></button>

                        </form>
                    </div>


                <?php
            }
                ?>


                <footer class="mt-80">
                    <p class="text-center align-bottom text-white font-bold">© 2021 Steen Papier Schaar, Erhan & Nick</p>
                </footer>
</body>


</html>