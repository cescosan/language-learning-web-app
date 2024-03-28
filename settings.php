

<?php


//intial is TRUE until the first translations are done

session_start();

$_SESSION["initial"] = TRUE;


?>


<!--
    Options for which vocab to start with: how many, where to start from
    Also copies in vocab and translations and stores these in $_SESSION
-->

<!DOCTYPE html>
<html>
<head>
    <title>Preferences</title>

    <link href="css/table.css" rel="stylesheet" type="text/css">
</head>
<body>
    <h1>Vocab Memorisation</h1>

    <form action="translate.php" method="POST">
        <input type="number" name="start" id="start">
        <label for="start">Start</label>

        <br>

        <input type="number" name="end" id="end">
        <label for="end">End</label>

        <!-- todo: validation for start<end -->

        <br>

        <input type="submit">
    </form>
</body>
</html>
