<!-- C:\xampp\htdocs\wiki1\app\views\admin\manage_categories.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Categories</title>
</head>
<body>

    <h1>Manage Categories</h1>

    <!-- Ajoutez ici le contenu spécifique de la gestion des catégories -->
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <!-- Ajoutez d'autres colonnes si nécessaire -->
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categories as $category): ?>
                <tr>
                    <td><?php echo $category['id']; ?></td>
                    <td><?php echo $category['name']; ?></td>
                    <!-- Ajoutez d'autres colonnes si nécessaire -->
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>
