

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <!-- Inclure vos fichiers CSS et JavaScript ici -->
</head>

<body>
    <header style="background-color: #333; color: #fff; padding: 10px; text-align: center;">
        <h1>Bienvenue sur le Wiki</h1>
    </header>

    <div
        style="max-width: 800px; margin: 20px auto; background-color: #fff; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 5px;">
        <h2>Derniers Wikis</h2>
        <ul style="list-style: none; padding: 0;">
            <?php foreach ($latestWikis as $wiki): ?>
                <li style="margin-bottom: 10px;">
                    <a href="wiki.php?id=<?php echo $wiki['wiki_id']; ?>">
                        <?php echo $wiki['title']; ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>

        <h2>Dernières Catégories</h2>
        <ul style="list-style: none; padding: 0;">
            <?php foreach ($latestCategories as $category): ?>
                <li style="margin-bottom: 10px;">
                    <a href="category.php?id=<?php echo $category['category_id']; ?>">
                        <?php echo $category['name']; ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>



    </div>
</body>

</html>