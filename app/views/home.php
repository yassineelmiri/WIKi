<!-- home.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wiki Home</title>
    <!-- Inclure vos fichiers CSS et JavaScript ici -->
</head>
<body>
    <h1>Welcome to the Wiki Platform</h1>

    <h2>Latest Wikis</h2>
    <ul>
        <?php foreach ($latestWikis as $wiki) : ?>
            <li><a href="wiki.php?id=<?php echo $wiki->getId(); ?>"><?php echo $wiki->getTitle(); ?></a></li>
        <?php endforeach; ?>
    </ul>

    <h2>Latest Categories</h2>
    <ul>
        <?php foreach ($latestCategories as $category) : ?>
            <li><a href="category.php?id=<?php echo $category->getId(); ?>"><?php echo $category->getName(); ?></a></li>
        <?php endforeach; ?>
    </ul>

    <!-- Autres éléments de la page d'accueil -->

</body>
</html>
