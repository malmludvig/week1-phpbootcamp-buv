<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Auto refresh -->
    <!-- <meta http-equiv="refresh" content="5"> -->
    
    <title>Formulär PHP</title>
</head>
<body>
<h1>Formulär med PHP</h1>

<form method="POST" action="">

    First name:
    <br>
    <input type="text" name="name"><br>
    Last name:
    <br>
    <input type="text" name="lastname">
    <br>

    <!--
    <select name="operator">
        <option value="plus">Plus </option> 
        <option value="minus">Minus </option> 
        <option value="division">Division </option> 
    </select><br>
    -->

    <input type="submit" value="Submit">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    if (isset($_POST['name']) && isset($_POST['lastname'])) {

        if(!empty($_POST['name']) && !empty($_POST['lastname'])){
            echo "If sats är true. ";
        } else{
            echo "If sats är false. Förnamn eller efternamn är tomma.";
        }

        $name = $_POST['name'];
        $lastName = $_POST['lastname']; 
        //$operator = $_POST['operator'];

        echo "<h2>$name $lastName</h2>";

    }
}

?>

    
</body>
</html>
