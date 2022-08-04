<?php
$words = ["forchetta", "ragazza", "casa", "cancello"];
$translations = ["fork", "girl", "house", "gate"];

?>

<!--
    Displays a table with the mark for each tranlation.  
-->

<!DOCTYPE html>


<html>
<head>
<title>Results</title>
</head>
<body>
    <form action="results.php" method="POST">
        <table>
            <thead>
                <tr>
                    <th>Words</th>
                    <th>Correct Translations</th>
                    <th>My Answers</th>
                    <th>Results</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                for ($count = 0; $count < sizeof($words); $count++){
                    echo "<tr>" . "\n";
                    echo "<td>" . $words[$count] . "</td>" . "\n";
                    echo "<td>" . $translations[$count]   . "</td>" . "\n";
                    echo "<td>" . $translations[$count]   . "</td>" . "\n"; //change to actual answers (carry previous POST forward)
                    echo "<td>" . $_POST["$count"] . "</td>" . "\n";
                    
                    echo "</tr>". "\n";
                }
                ?>
            </tbody>
            
        </table>
        
    </form>
</body>
</html>
