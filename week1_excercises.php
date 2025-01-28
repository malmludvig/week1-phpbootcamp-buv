<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">

    <meta http-equiv="refresh" content="5">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Grundläggande Övningar</title>
    <style>
        table {
            border: 1px solid black;
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>

<!--
        Variabler i PHP:
        $name = "Ludvig;
        $number = 10;

        echo $name; //Skriver ut Ludvig
        echo "Mitt namn är $name; // Mitt namn är Ludvig
        
        For-loop
        for ($i = 1; $i <= 10; $i++) {} 

        Array
        $cars = array("Volvo", "BMW", "Toyota"); 
        $cars[0] = "Volvo";
        $cars[1] = "BMW";
        $cars[2] = "Toyota";

        Foreach-loop
        foreach ($cars as $x) { 
        echo "$x <br>";
        }

        Associativ array (kallas för key value pair. Heter Dictionary i C#)
        $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
        foreach ($car as $x => $y) {
        echo "$x: $y <br>";
        }
-->

    <h1>PHP Grundläggande Övningar<h1>

    <!-- 1. Skriv ett PHP-skript som skriver ut "Hello, World!" inuti en <h1>-tagg. -->
    <h2>Övning nummer 1</h2>
    <?php
    echo "Hello world!";
    ?>

    <!-- 2. Skapa ett PHP-skript som definierar en variabel $name med ditt namn och skriver ut "Hej, [ditt namn]!" inuti en <p>-tagg. -->
    <h2>Övning nummer 2</h2>
    <?php

    ?>

    <!-- 3. Skriv ett PHP-skript som beräknar summan av två tal, 10 och 20, och visar resultatet inuti en <h2>-tagg. -->
    <h2>Övning nummer 3</h2>
    <?php

    ?>

    <!-- 4. Skriv ett PHP-skript som kontrollerar om ett tal, lagrat i en variabel $num, är jämnt eller udda och visar resultatet i en <p>-tagg. -->
    <h2>Övning nummer 4</h2>
    <?php

    ?>

    <!-- 5. Skapa ett HTML-formulär med ett inmatningsfält för användarens namn. När formuläret skickas ska PHP visa "Välkommen, [namn]!". -->
    <h2>Övning nummer 5</h2>
    <form method="POST">
        <label for="name">Ange ditt namn:</label>
        <input type="text" id="name" name="name">
        <button type="submit">Skicka</button>
    </form>
    <?php

    ?>

    <!-- 6. Skriv ett PHP-skript som använder en for-loop för att skriva ut siffrorna 1 till 10 inuti en oordnad lista (<ul>). -->
    <h2>Övning nummer 6</h2>
    <ul>
        <?php

        ?>
    </ul>

    <!-- 7. Skapa en PHP-array med 5 olika färger. Använd en foreach-loop för att visa varje färg i en lista. -->
    <h2>Övning nummer 7</h2>
    <ul>
        <?php

        ?>
    </ul>

    <!-- 8. Skriv ett PHP-skript som kontrollerar värdet av en variabel $dag och visar motsvarande veckodag. -->
    <h2>Övning nummer 8</h2>
    <?php
    
    ?>

    <!-- 9. Skriv ett PHP-skript som tar en strängvariabel $message = "Hej, PHP!" och: -->
    <!-- - Konverterar den till versaler. -->
    <!-- - Visar strängens längd. -->
    <h2>Övning nummer 9</h2>
    <?php
    
    ?>

<h2>Övningar med HTML tables. Exempel på table:</h2>

<table>
    <tr>
        <th>Name</th>
        <th>Age</th>
    </tr>
    <tr>
        <td>John</td>
        <td>25</td>
    </tr>
    <tr>
        <td>Jane</td>
        <td>30</td>
    </tr>
</table>

    <!-- 10. Skapa två PHP-filer: -->
    <!-- - header.php: Innehåller en enkel <header> med en titel. -->
    <!-- - index.php: Inkluderar header.php och visar "Välkommen till min webbplats!". -->
    <!-- Tips: Använd "include 'header.php'" för att lägga till kod från en annan fil. -->
    <h2>Övning nummer 10</h2>
    <?php

    ?>


    <!-- 11. Skriv ett PHP-skript som skapar en tabell med 5 rader och 1 kolumn med en for-loop. -->
    <h2>Övning nummer 11</h2>
    <table>
        <?php

        ?>
    </table>

    <!-- 12. Skapa ett PHP-skript som hanterar en array med namn (t.ex. ["Anna", "Erik", "Maria"]). -->
    <!-- - Visa alla namn i en tabell med en kolumn som heter "Namn". -->
    <h2>Övning nummer 12</h2>
    <table>
        <tr>
            <th>Namn</th>
        </tr>
        <?php

        ?>
    </table>

    <!-- 13. Skapa ett PHP-skript som hanterar en associativ array med namn och åldrar (t.ex. ["Anna" => 25, "Erik" => 30, "Maria" => 22]). -->
    <!-- - Visa alla namn och åldrar i en tabell med två kolumner: "Namn" och "Ålder". -->
    <!-- - Markera raden för personer som är över 25 år med en annan bakgrundsfärg (t.ex. gul). -->
    <!-- Tips! Använd inline HTML-tag CSS styling. Tex: <tr style='background-color: yellow;'> -->
    <!-- Tips! Använd en foreach-loop: foreach ($personer as $namn => $alder){ echo:"";} -->
    <h2>Övning nummer 13</h2>
    <table>
        <tr>
            <th>Namn</th>
            <th>Ålder</th>
        </tr>
        <?php

        ?>
    </table>

</body>
</html>
