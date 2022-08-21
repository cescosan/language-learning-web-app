<?php


session_start();

$w = fopen("words.txt", "r");
$t = fopen("translations.txt", "r");


print_r($_POST);
// todo: need to have start and end points; maybe best to put vocab with translations into db
for($count = $_POST["start"] - 1; $count <= $_POST["end"] - 1; $count++) {
    $translations[fgets($w)] = fgets($t);
}

fclose($w);
fclose($t);


$_SESSION["vocab"] = $translations;
$_SESSION["initial"] = TRUE;


//first attempt to translate all words in the set, then just those got wrong
if($_SESSION["initial"] != TRUE) {
    $updated = [];
    foreach($_POST as $key => $value) {
        if ($value == "incorrect") {
            //all spaces in $_POST strings are converted to underscores; need to be converted back to match with $_SESSION["vocab"]
            $formatted_key = str_replace("_", " ", $key);
            echo $formatted_key;
            $updated[$formatted_key] = $_SESSION["vocab"][$formatted_key];

        }
    }

    $amount = sizeof($updated);
}
else {
    $updated = $_SESSION["vocab"];
    $amount = sizeof($_SESSION["vocab"]);
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
                
                //todo: remove autofill
                $indexed = [];
                foreach($updated as $key => $value) {
                    $indexed[] = $key;
                }


                for ($count = 0; $count < $amount; $count++){
                    $index = rand(0, $amount - 1 - $count);
                    echo "<tr>" . "\n";
                    echo "<td id=\"word\">" . $indexed[$index] . "</td>" . "\n";
                    echo "<td>" . "<input type=\"text\" name=\"${indexed[$index]}\">"   . "</td>" . "\n";
                    
                    
                    echo "</tr>". "\n";

                    array_splice($indexed, $index, 1);
                }
                ?>
            </tbody>
            
        </table>

        <input type="submit">
    </form>
</body>
</html>
