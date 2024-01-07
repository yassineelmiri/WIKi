<!-- app/views/wiki.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $wiki['title']; ?> - Wiki</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        h1, h2 {
            color: #333;
        }

        p {
            color: #555;
        }
    </style>
</head>
<body>
    <header>
        <h1><?php echo $wiki['title']; ?></h1>
    </header>

    <div class="container">
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
