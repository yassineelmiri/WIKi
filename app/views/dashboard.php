<!-- app/views/dashboard.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Inclure Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">

    <div class="container mx-auto my-8 p-8 bg-white shadow-lg rounded-lg">
        <h1 class="text-3xl font-bold mb-6">Dashboard</h1>

        <h2 class="text-xl font-bold mb-4">Statistics</h2>
        <ul class="list-disc ml-6">
            <li>Total Wikis: <?php echo $stats['totalWikis']; ?></li>
            <li>Total Users: <?php echo $stats['totalUsers']; ?></li>
            <!-- Ajoutez d'autres statistiques ici -->
        </ul>


    </div>

</body>
</html>
