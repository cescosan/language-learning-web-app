<?php
$words = ["forchetta", "ragazza", "casa", "cancello"];
$translations = ["fork", "girl", "house", "gate"];

?>

<!DOCTYPE html>


<html>
<head>
<title>Answers</title>
</head>
<body>
    <form action="results.php" method="POST">
        <table>
            <thead>
                <tr>
                    <th>Words</th>
                    <th>Correct Translations</th>
                    <th>My Answers</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                for ($count = 0; $count < sizeof($words); $count++){
                    echo "<tr>" . "\n";
                    echo "<td>" . $words[$count] . "</td>" . "\n";
                    echo "<td>" . $translations[$count]   . "</td>" . "\n";
                    echo "<td>" . $_POST[$words[$count]] . "</td>" . "\n";
                    echo "<td>" . "<label for=\"c$count\">Correct</label>"  . "<input id=\"c$count\" name=\"$count\" type=\"radio\" value=\"Correct\">" . "<label for=\"i$count\">Incorrect</label>" . "<input id=\"i$count\" name=\"$count\" type=\"radio\" value=\"Incorrect\">" . "</td>" . "\n";
                    
                    echo "</tr>". "\n";
                }
                ?>
            </tbody>
            
        </table>

        <input type="submit">
        
    </form>
</body>
</html>
