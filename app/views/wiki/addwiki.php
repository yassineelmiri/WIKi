<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Wiki</title>
    <!-- Include your CSS stylesheets or any necessary assets -->
</head>
<body>
    <h1>Add a New Wiki</h1>
    <form action="../../../public/index.php?action=insert" method="post">
        <!-- Form fields for adding a new Wiki -->
        <label for="authorId">title</label>
        <input type="text" name="title" required><br>

        <label for="categoryId">Content</label>
        <input type="text" name="content" required><br>

        <label for="tags">user</label>
        <input type="text" name="user_id" required><br>

        <input type="submit" value="Add Wiki">
    </form>

    <!-- Include your JavaScript or any additional scripts if needed -->
</body>
</html>
