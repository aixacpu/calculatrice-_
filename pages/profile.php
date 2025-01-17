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
    <title>Mon Profile</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="content">
        <div class="card">
            <h1>Bienvenue, <?php echo $_SESSION['user']; ?> !</h1>
            <h2>Historique des opérations :</h2>
            <table>
                <thead>
                <th>Opération</th>
                        <th>Nombre 1</th>
                        <th>Nombre 2</th>
                        <th>Résultat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    if (isset($_SESSION['operations']) && !empty($_SESSION['operations'])) {
                        foreach ($_SESSION['operations'] as $operation) {
                            echo "<tr>";
                            echo "<td>" . htmlspecialchars($operation['operation']) . "</td>";
                            echo "<td>" . htmlspecialchars($operation['number1']) . "</td>";
                            echo "<td>" . htmlspecialchars($operation['number2']) . "</td>";
                            echo "<td>" . htmlspecialchars($operation['result']) . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='4'>Aucune opération effectuée pour le moment.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>