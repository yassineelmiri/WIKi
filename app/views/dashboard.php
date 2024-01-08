<?php
$title = "Dashboard";
ob_start();
?>

<section class="bg-gray-100 font-sans">

    <div class="container mx-auto my-8 p-8 bg-white shadow-lg rounded-lg">
        <h1 class="text-3xl font-bold mb-6">Dashboard</h1>

        <h2 class="text-xl font-bold mb-4">Statistics</h2>
        <ul class="list-disc ml-6">
            <li>Total Wikis:
                <?php echo $stats['totalWikis']; ?>
            </li>
            <li>Total Users:
                <?php echo $stats['totalUsers']; ?>
            </li>
            <!-- Ajoutez d'autres statistiques ici -->
        </ul>


    </div>
</section>
<?php $content = ob_get_clean(); ?>
<?php include 'layout/layout.php'; ?>