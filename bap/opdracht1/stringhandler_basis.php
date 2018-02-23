<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Scripting MD1A MD1B">
    <meta name="author" content="Ma">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>PHP String handler opdracht</title>
</head>
<body>
<img src ="https://www.ma-web.nl/static/vector/Logo_blok.svg"  alt = "logo" width = "30">
<div class="wrapper">
    <form method="GET" action="/stringhandler/stringhandler.php">
        <fieldset>
            <legend>Stringhandler basis</legend>
            <input type = "text" name = "input1"  placeholder = " string 1"><br>
            <input type = "text" name = "input2"   placeholder = " string 2">
            <input type = "submit"  id = "submit" name = "submit" value = "submit">
        </fieldset>
    </form>
    <hr>
    <ul>
        <li class="showSpaces">Ingevoerde string 1:   </li>
        <li class="showSpaces">Ingevoerde string 2:   </li>
        <li>String 1 getrimd trim():   </li>
        <li>String 2 getrimd trim():   </li>
        <li>String 3 is de concatenation van string 1 en string 2:  </li>
        <li>De lengte van string 3 is: 0  characters</li>
        <li>Zoeken naar spaties. Er zit een spatie op positie </li>
        <li>Zoeken naar @. Er zit een @ op positie </li>
        <li>Zoeken naar "." . Er zit een  "."  op positie </li>
        <li>Zoek naar substring <strong>"PHP"</strong> vervang dit door <strong>"NodeJS"</strong>  </li>
        <li>Wijzig de eerste letter van string 3 naar hoofdletter: </li>
        <li>Alles in hoofdletters:  </li>
    </ul>
    <hr>
    <li>Opdracht:<br> Stringhandler. Maak de PHP code voor <a href="http://schw.hosts.ma-cloud.nl/stringhandler/stringhandler.php">Stringhander<a>
    <li>Hoe moet jij inleveren?: <br>
        1) Link naar de werkende code in jouw portfoliomap bij Ma-cloud<br>
        2) Link naar jouw code bij GITHUB</li>
    <li>Bonus opdracht: maak PHP code waarmee jij controleert of een input een geldig e-mail adres zou kunnen zijn. Met JS controleren is niet toegestaan.</li>
    <li>Bonus opdracht: na submitten form, schrijf de eerder ingevoerde strings terug met PHP in de formulier invoer velden</li>
    </ol>
</div>
</body>
</html>
