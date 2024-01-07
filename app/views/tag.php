<!-- app/views/tag.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tags</title>
    <!-- Inclure vos fichiers CSS et JavaScript ici -->
</head>
<body>
    <h1>Liste des Tags</h1>

    <ul>
        <?php foreach ($tags as $tag): ?>
            <li>
                <a href="showTag.php?id=<?php echo $tag['tag_id']; ?>">
                    <?php echo $tag['name']; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

    <!-- Autres éléments de la page des tags -->

</body>
</html>
