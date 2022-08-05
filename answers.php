<?php
$translations = [];

$w = fopen("words.txt", "r");
$t = fopen("translations.txt", "r");


for($count = 0; $count < 10; $count++) {
    $translations[fgets($w)] = fgets($t);
}

?>

<!--
   Displays the translation for each Italian word with buttons next to each for marking.
   Sends marks to the results page.
-->

<!DOCTYPE html>


<html>
<head>
    <title>Answers</title>

    <link href="css/table.css" rel="stylesheet" type="text/css">
</head>
<body>
    <form action="translate.php" method="POST">
        <table>
            <thead>
                <tr>
                    <th>Vocabulary</th>
                    <th>Correct Translations</th>
                    <th>My Answers</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($_POST as $key => $value){
                    echo "<tr>" . "\n";

                    //undoing automatic conversion from space to underscore in $_POST
                    echo "<td>" . str_replace("_", " ", $key) . "</td>" . "\n"; 
                    echo "<td>" . $translations[str_replace("_", " ", $key)]   . "</td>" . "\n";


                    echo "<td>" . $value . "</td>" . "\n";
                    echo "<td>"
                    . "<label for=\"correct$key\"><img src=\"assets\checkmark.jpg\"></label>"
                    . "<input id=\"correct$key\" name=\"$key\" type=\"radio\" value=\"correct\">"
                    . "<label for=\"incorrect$key\"><img src=\"assets\cross.jpg\"></label>"
                    . "<input id=\"incorrect$key\" name=\"$key\" type=\"radio\" value=\"incorrect\">"
                    . "</td>"
                    . "\n";
                    
                    echo "</tr>". "\n";
                }
                ?>
            </tbody>
            
        </table>

        <input type="submit">
        
    </form>
</body>
</html>
