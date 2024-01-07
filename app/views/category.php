<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <!-- Inclure Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 font-sans p-4">

    <h1 class="text-3xl font-bold mb-6">List of Categories</h1>

    <ul class="list-disc ml-6">
        <?php foreach ($categories as $category): ?>
            <li class="mb-4">
                <strong class="text-blue-600">
                    <?php echo $category['name']; ?>
                </strong>
                <!-- Ajoutez d'autres informations de catégorie ici si nécessaire -->
                <a href="show_category.php?id=<?php echo $category['category_id']; ?>"
                    class="text-green-500 hover:underline">View Details</a>
            </li>
        <?php endforeach; ?>
    </ul>

</body>

</html>