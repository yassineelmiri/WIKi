<?php
$title = "wiki";
ob_start();
?>
<header style="background-color: #333; color: #fff; padding: 10px; text-align: center;">
    <h1>
        <?php echo isset($wiki['title']) ? $wiki['title'] : 'Wiki Title Not Available'; ?>
    </h1>
</header>

<div
    style="max-width: 800px; margin: 20px auto; background-color: #fff; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 5px;">

    <?php if ($wiki && is_array($wiki)): ?>

        <p>User:
            <?php echo isset($wiki['user_id']) ? $wiki['user_id'] : 'User Not Available'; ?>
        </p>
        <p>Content:
            <?php echo isset($wiki['content']) ? $wiki['content'] : 'Content Not Available'; ?>
        </p>
        <p>Created at:
            <?php echo isset($wiki['created_at']) ? $wiki['created_at'] : 'Date Not Available'; ?>
        </p>

        <hr>

        <div>
            <?php echo isset($wiki['content']) ? $wiki['content'] : 'Content Not Available'; ?>
        </div>

    <?php else: ?>

        <p>Wiki details not available.</p>

    <?php endif; ?>

</div>
<?php $content = ob_get_clean(); ?>
<?php include 'layout/layout.php'; ?>