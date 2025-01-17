<?php
$pageTitle = "Calculatrice";
include 'header.php';

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}
?>
<h1>Calculatrice</h1>
<ul>
    <li><a href="addition.php">Addition</a></li>
    <li><a href="multiplication.php">Multiplication</a></li>
    <li><a href="division.php">Division</a></li>
    <li><a href="soustraction.php">Soustraction</a></li>
</ul>
<?php include 'footer.php'; ?>
