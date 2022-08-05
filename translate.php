<?php
$words = [];
$amount = 5;

if(sizeof($_POST) == 0) {
    $file = fopen("words.txt", "r");
    
    while(!feof($file)) {
        $line = fgets($file);
        $words[] = $line;
    }

    fclose($file);
}
else {
    foreach($_POST as $key => $value) {
        if ($value == "incorrect") {
            $words[] = $key;
        }
    }

    $amount = sizeof($words);
}


?>

<!--
    Displays a table with Italian words to translate, with a box next to each one for a tranlation.
    Sends the tranlations to the answers page.
-->

<!DOCTYPE html>
<html>
<head>
    <title>Tranlate</title>

    <link href="css/table.css" rel="stylesheet" type="text/css">
</head>
<body>
    <form action="answers.php" method="POST">
        <table>
            <tbody>
                <?php
                 
                $subset = [];
                for($count = 0; $count < $amount; $count++) {
                    $subset[] = $words[$count];
                }


                for ($count = 0; $count < $amount; $count++){
                    $index = rand(0, $amount - 1 - $count);
                    echo "<tr>" . "\n";
                    echo "<td id=\"word\">" . $subset[$index] . "</td>" . "\n";
                    echo "<td>" . "<input type=\"text\" name=\"${subset[$index]}\">"   . "</td>" . "\n";
                    
                    
                    echo "</tr>". "\n";

                    array_splice($subset, $index, 1);
                }
                ?>
            </tbody>
            
        </table>

        <input type="submit">
    </form>
</body>
</html>
