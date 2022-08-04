<?php
$words = ["forchetta", "ragazza", "casa", "cancello"];

?>

<!DOCTYPE html>
<html>
<head>
<title>Embed PHP in a .html File</title>
</head>
<body>
    <form>
        <table>
            <thead>
                <tr>
                    <th>Words</th>
                    <th>Translations</th>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($count = 0; $count < 4; $count++){
                    echo "<tr>" . "\n";
                    echo "<td>" . $words[$count] . "</td>" . "\n";
                    echo "<td>" . "<input type=\"text\" >"   . "</td>" . "\n";
                    
                    
                    echo "</tr>". "\n";
                }
                ?>
            </tbody>
            
        </table>
    </form>
</body>
</html>
