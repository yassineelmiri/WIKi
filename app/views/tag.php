<?php
$title = "Tag";
ob_start();
?>
<h1>Liste des Tags</h1>

<ul>
    <?php foreach ($tags as $tag): ?>
        <li>
            <a href="tag.php?id=<?php echo $tag['tag_id']; ?>">
                <?php echo $tag['name']; ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>


<?php $content = ob_get_clean(); ?>
<?php include 'layout/layout.php'; ?>