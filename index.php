<!DOCTYPE html>
<html>

<head>
    <title> Steen Papier Schaar</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-indigo-600">
    <div class="homepage h-screen w-screen">
        <h1 class="text-white font-bold text-3xl text-center mt-5">Steen Papier Schaar</h1>
        <h1 class="text-white font-bold text-3xl text-center mt-5">Kies hieronder hoe je wilt spelen:</h1>

        <div class="flex justify-center">
            <form action="multi.php" post="POST">
                <div class="rounded-3xl border-4 w-60 text-center border-red-500 mt-24  ">
                    <a href="multi.php" class="text-white font-bold"> Multipayer - Speel met een vriend! </a>
                </div>
            </form>
            <form action="computer.php" post="POST">
                <div class="rounded-3xl border-4 w-60 text-center border-yellow-500 ml-6 mt-24">
                    <a href="computer.php" class="text-white font-bold"> Computer - Speel met een computer! </a>
                </div>
            </form>
        </div>

        <footer class="mt-96">
            <p class="text-center align-bottom text-white font-bold">© 2021 Steen Papier Schaar, Erhan & Nick</p>
        </footer>
    </div>

</body>

</html>