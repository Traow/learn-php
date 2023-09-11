<?php
$name = 'Robi';
$num = 10;
?>

    <?php include 'partials/header.php'; ?>
    <
    <h1><?=$name?></h1>
    <?php if($num > 10):  ?>
        <h1>Suurem</h1>
        <?php else: ?>
            <h1>Vaiksem</h1>
            <?php endif ?>
            <?php include 'partials/footer.php'; ?>



