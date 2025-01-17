<?php
session_start();
include '../functions/functionsMath.php';

if (!isset($_SESSION['operations'])) {
    $_SESSION['operations'] = [];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num1 = filter_input(INPUT_POST, 'num1', FILTER_VALIDATE_FLOAT);
    $num2 = filter_input(INPUT_POST, 'num2', FILTER_VALIDATE_FLOAT);

    if ($num1 !== false && $num2 !== false) {
        $result = addition($num1, $num2);

        // Ajouter l'opération dans l'historique des opérations
        $_SESSION['operations'][] = [
            'operation' => 'Addition',
            'number1' => $num1,
            'number2' => $num2,
            'result' => $result
        ];

        $success = "Résultat : $result";
    } else {
        $error = "Veuillez entrer des nombres valides.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Addition</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <h1>Page d'Addition</h1>
    <form action="addition.php" method="post">
    <input type="number" name="num1" />
    <img src="../images/plus.png" alt="+" style="width:20px;height:20px;">
    <input type="number" name="num2" />
    <img src="../images/egal.png" alt="=" style="width:20px;height:20px;">
    <button type="submit">Calculer</button>
</form>
    <?php if (isset($result)) echo "<p>Résultat: $result</p>"; ?>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <?php include 'footer.php'; ?>
</body>
</html>
