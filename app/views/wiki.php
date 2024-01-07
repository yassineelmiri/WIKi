<!-- app/views/wiki.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $wiki['title']; ?> - Wiki</title>
    <!-- Inclure vos fichiers CSS et JavaScript ici -->
</head>
<body>
    <header style="background-color: #333; color: #fff; padding: 10px; text-align: center;">
        <h1><?php echo $wiki['title']; ?></h1>
    </header>

    <div style="max-width: 800px; margin: 20px auto; background-color: #fff; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 5px;">
        <p>Category: <?php echo $wiki['category']; ?></p>
        <p>Tags: <?php echo $wiki['tags']; ?></p>
        <p>Author: <?php echo $wiki['author']; ?></p>
        <p>Created at: <?php echo $wiki['created_at']; ?></p>

        <hr>

        <div>
            <?php echo $wiki['content']; ?>
        </div>
    </div>
</body>
</html>
