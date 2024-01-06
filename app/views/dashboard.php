<!-- app/views/dashboard.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Inclure vos fichiers CSS et JavaScript ici -->
</head>
<body>
    <h1>Dashboard</h1>

    <h2>Statistics</h2>
    <ul>
        <li>Total Wikis: <?php echo $stats['totalWikis']; ?></li>
        <li>Total Users: <?php echo $stats['totalUsers']; ?></li>
        <!-- Ajoutez d'autres statistiques ici -->
    </ul>

    <!-- Autres éléments du tableau de bord -->

</body>
</html>
