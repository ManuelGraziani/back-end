<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>Data e ora di oggi :
            <?php date_default_timezone_set('CET');
            echo date('d-m-Y') . " " . date('H:i'); ?>
        </h1>

        <h2>formazione squadre</h2>
        <?php

        $squadre = [
            "Juventus vs Milan" => [
                "Juventus" => ["Mario", "Giovanni", "Francesco", "Andrea"],
                "Milan" => ["Pippo", "Pluto", "Paperino", "Topolino"],
            ],
            "Napoli vs Roma " => [
                "Napoli" => ["Shrek", "Fiona", "Ciuchino", "Gatto"],
                "Roma" => ["Mario", "Luigi", "Toad", "Silvia Galassia"]
            ]

        ];

        echo '<ul>';
        foreach ($squadre as $partita => $squadre) {
            echo '<li>'. " Partita: " . $partita . '</li>';
            echo "<ul>";
            foreach($squadre as $squadra => $giocatori) {
                echo "<li>". $squadra . ": ". "</li>";
                echo implode(", ", $giocatori) . "<br>";
            }
            echo "</ul>";
        }
        echo '</ul>'
            ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>