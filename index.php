<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php
session_start();
echo $_SESSION['gmail'];
echo $_SESSION['role'];



?>
    </h1>
</body>
</html>
