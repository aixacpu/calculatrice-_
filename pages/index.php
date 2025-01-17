<?php 
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <h1>Bienvenue sur la page d'accueil</h1>
    <img src="../images/capture.png" alt="Image Home" style="width: 50%; height: auto; max-width: 550px;">
    <p> Bienvenue sur la calculatrice. Résolvez vos calculs rapidement et en toute simplicité.</p>
    <?php include 'footer.php'; ?>
</body>
</html>