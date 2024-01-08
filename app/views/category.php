<?php
$title = "Category";
ob_start();
?>

<section class="bg-gray-100 font-sans p-4">

    <h1 class="text-3xl font-bold mb-6">List of Categories</h1>

    <ul class="list-disc ml-6">

        <li class="mb-4">
            <strong class="text-blue-600">
                <?php echo $category['name']; ?>
            </strong><br><hr>
            <!-- Ajoutez d'autres informations de catégorie ici si nécessaire -->
            <a href="category.php?id=<?php echo $category['category_id']; ?>"
                class="text-green-500 hover:underline">View Details</a>

        </li>

    </ul>

</section>
<?php $content = ob_get_clean(); ?>
<?php include 'layout/layout.php'; ?>