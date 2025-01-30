<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
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

        h2{

            padding-top: 50px;
        }

    </style>
</head>
<body>
    
    <h1>PHP Grundläggande Övningar</h1>
    
    <!-- 1. Skriv ett PHP-skript som skriver ut "Hello, World!" inuti en <h1>-tagg. -->
    <h2>Övning nummer 1</h2>
    
    <?php
    echo "<h1>Hello, World!</h1>";
    ?>

    <!-- 2. Skapa ett PHP-skript som definierar en variabel $name med ditt namn och skriver ut "Hej, [ditt namn]!" inuti en <p>-tagg. -->
    <h2>Övning nummer 2</h2>
    <?php
    $name = "Ludvig"; // Replace with your name
    echo "<p>Hej, $name!</p>";
    
    ?>

    <!-- 3. Skriv ett PHP-skript som 
     beräknar summan av två tal, 10 och 20, 
     och visar resultatet inuti en <h2>-tagg. -->
    <h2>Övning nummer 3</h2>
    <?php
    $sum = 10 + 20;
    echo "<h2>Summan är: $sum</h2>";
    ?>

    <!-- 4. Skriv ett PHP-skript som kontrollerar 
     om ett tal, lagrat i en 
     variabel $num, är jämnt eller
      udda och visar resultatet i en <p>-tagg. -->
    <h2>Övning nummer 4</h2>
    <?php
    $num = 15; // Change this number to test different values
    if ($num % 2 == 0) {
        echo "<p>$num är ett jämnt tal.</p>";
    } else {
        echo "<p>$num är ett udda tal.</p>";
    }
    ?>

    <!-- 5. Skapa ett HTML-formulär
      med ett inmatningsfält för 
      användarens namn. När formuläret 
      skickas ska PHP visa "Välkommen, [namn]!". -->
    
      <h2>Övning nummer 5</h2>

    <form method="POST">

        <label for="name">Ange ditt namn:</label>
        <input type="text" id="name" name="name">
        <button type="submit">Skicka</button>
    </form>
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $name = htmlspecialchars($_POST['name']);
        
        echo "<p>Välkommen, $name!</p>";
    }
    ?>

    <!-- 6. Skriv ett PHP-skript som
      använder en for-loop för att
      skriva ut siffrorna 1 till 
      10 inuti en oordnad lista (<ul>). -->
    <h2>Övning nummer 6</h2>
    

    <div class="divNumber<?php echo "4" ?>"> 
    <div class="divNumber<?="4" ?>"> 
    <div class="divNumber4">   

    </div>
    
    
        <?php

        for ($i = 1; $i <= 10; $i++) {
            echo "<ul><li>$i</li></ul>";
        }
        ?>


    <!-- 7. Skapa en PHP-array med 5 olika färger. Använd en foreach-loop för att visa varje färg i en lista. -->
    <h2>Övning nummer 7</h2>
    <ul>
    <?php
    $colors = array("Red", "Green", "Blue", "Yellow", "Purple");
    

    $colors[1];

    for ($i = 0; $i < count($colors); $i++) {
        echo "<li>$colors[$i]</li>";
    }

    foreach ($colors as $c) {
        //echo "<li>$color</li>";
        echo "<li style='color: $c;'>$c</li>";
    }


    ?>
    </ul>

    <!-- 8. Skriv ett PHP-skript som kontrollerar värdet av en 
     variabel $dag och visar motsvarande veckodag. -->
    <h2>Övning nummer 8</h2>
    <?php
    $day = 0; // Change this number to test different days
    switch ($day) {
        case 1:
            echo "<p>Måndag</p>";
            break;
        case 2:
            echo "<p>Tuesday</p>";
            break;
        case 3:
            echo "<p>Onsdag</p>";
            break;
        case 4:
            echo "<p>Torsdag</p>";
            break;
        case 5:
            echo "<p>Fredag</p>";
            break;
        case 6:
            echo "<p>Lördag</p>";
            break;
        case 7:
            echo "<p>Söndag</p>";
            break;
        default:
            echo "<p>Ogiltig dag</p>";
    }

    ?>

    <!-- 9. Skriv ett PHP-skript som tar en strängvariabel 
     $message = "Hej, PHP!" och: -->
    <!-- - Konverterar den till versaler. -->
    <!-- - Visar strängens längd. -->
    <h2>Övning nummer 9</h2>
    <?php
    $message = "Hej, PHP!";
    echo "<p>Versaler: " . strtoupper($message) . "</p>";
    echo "<p>Längd: " . strlen($message) . "</p>";
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
    <!-- - header.php: Innehåller en enkel <header> m -->
    <h2>Övning nummer 10</h2>
    
    <?php
        include'include.php';
    ?>

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

    <!-- 11. Skapa en tabell med 5 rader och 1 kolumn -->
<h2>Övning nummer 11</h2>
<table>
    <?php
    for ($i = 1; $i <= 5; $i++) {
        echo "<tr><td>Rad $i</td></tr>";
    }
    ?>
</table>


    <!-- 12. Skapa ett PHP-skript som hanterar en array med namn 
     (t.ex. ["Anna", "Erik", "Maria"]). -->
    <!-- - Visa alla namn i en tabell med en kolumn som heter "Namn". -->
<h2>Övning nummer 12</h2>
<table>
    <tr>
        <th>Namn</th>
    </tr>
    <?php
    $namn = ["Anna", "Erik", "Maria"];


    foreach ($namn as $person) {
        echo "<tr><td>$person</td></tr>";
    }
    ?>
</table>


    <!-- 13. Skapa ett PHP-skript som hanterar en associativ array med namn och åldrar 
     (t.ex. ["Anna" => 25, "Erik" => 30, "Maria" => 22]). -->
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
    $personer = ["Anna" => 25, "Erik" => 30, "Maria" => 22];
    foreach ($personer as $namn => $alder) {

        $background = ($alder > 25) ? "style='background-color: yellow;'" : "";

        if($alder > 25) {
            
            $background = "style='background-color: yellow;'";
        } else{
            $background = "";
        }

        echo "<tr $background><td>$namn</td><td>$alder</td></tr>";
    }
    ?>
</table>


<h2>Övning nummer 14</h2>
    <!-- 14. Skapa en miniräknare med PHP . -->
    <!-- Man ska kunna mata in två tal, 
     och sedan välja plus, minus, gånger eller delat med. -->
    <!-- HTML-forms ska användas -->

    <form method="post">
        Tal 1: <input type="number" name="tal1"><br>
        Tal 2: <input type="number" name="tal2"><br>
        Operation:
        <select name="operation">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select><br>
        <input type="submit" value="Beräkna">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tal1 = $_POST['tal1'];
        $tal2 = $_POST['tal2'];
        $operation = $_POST['operation'];

        switch ($operation) {
            case "add":
                $resultat = $tal1 + $tal2;
                break;
            case "subtract":
                $resultat = $tal1 - $tal2;
                break;
            case "multiply":
                $resultat = $tal1 * $tal2;
                break;
            case "divide":
                if ($tal2 == 0) {
                    $resultat = "Division med noll är inte tillåtet.";
                } else {
                    $resultat = $tal1 / $tal2;
                }
                break;
            default:
                $resultat = "Ogiltig operation";
        }

        echo "<p>Resultatet är: $resultat</p>";
    }

    ?>
    
    <!-- Miniräknaren fast med koden indelad i funktioner -->

    <!-- TIPS för att kommentera kod -->
        <!-- CTRL + * -->
        <!-- CTRL + K + U * --> 
        <!-- CTRL + K + C * -->

    <!-- <form method="post">
        Tal 1: <input type="number" name="tal1"><br>
        Tal 2: <input type="number" name="tal2"><br>
        Operation:
        <select name="operation">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select><br>
        <input type="submit" value="Beräkna">
    </form>

    //<?php
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     $tal1 = $_POST['tal1'];
    //     $tal2 = $_POST['tal2'];
    //     $operation = $_POST['operation'];

    //     switch ($operation) {
    //         case "add":
    //             $resultat = Add($tal1, $tal2);
    //             break;
    //         case "subtract":
    //             $resultat = Minus($tal1, $tal2);
    //             break;
    //         case "multiply":
    //             $resultat = Multiply($tal1, $tal2);
    //             break;
    //         case "divide":
    //             if ($tal2 == 0) {
    //                 $resultat = "Division med noll är inte tillåtet.";
    //             } else {
                    
    //                 $resultat = Division($tal1, $tal2);
    //             }
    //             break;
    //         default:
    //             $resultat = "Ogiltig operation";
    //     }

    //     echo "<p>Resultatet är: $resultat</p>";
    // }

// function Add($a, $b){
//     return $a + $b;
// }

// function Minus($a, $b){
//     return $a - $b;
// }

// function Multiply($a, $b){
//     return $a * $b;
// }

// function Division($a, $b){
//     return $a / $b;
// } 
// ?>
    

</body>
</html>