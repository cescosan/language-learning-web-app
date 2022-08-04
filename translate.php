<?php
$words = ["forchetta", "ragazza", "casa", "cancello"];

?>

<!--
    Displays a table with Italian words to translate, with a box next to each one for a tranlation.
    Sends the tranlations to the answers page.
-->

<!DOCTYPE html>
<html>
<head>
<title>Tranlate</title>
</head>
<body>
    <form action="answers.php" method="POST">
        <table>
            <thead>
                <tr>
                    <th>Words</th>
                    <th>Translations</th>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($count = 0; $count < sizeof($words); $count++){
                    echo "<tr>" . "\n";
                    echo "<td>" . $words[$count] . "</td>" . "\n";
                    echo "<td>" . "<input type=\"text\" name=\"${words[$count]}\">"   . "</td>" . "\n";
                    
                    
                    echo "</tr>". "\n";
                }
                ?>
            </tbody>
            
        </table>

        <input type="submit">
    </form>
</body>
</html>
