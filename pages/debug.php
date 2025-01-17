<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>DEBUG</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <h1>Sessions Actuelles (DEBUG)</h1>
    <pre><?php var_dump($_SESSION); ?></pre>
    <?php include 'footer.php'; ?>
</body>
</html>
