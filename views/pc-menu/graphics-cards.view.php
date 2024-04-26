
<?php require(__DIR__ . "/../partials/header.php"); ?>
<?php require(__DIR__ . "/../partials/nav.php"); ?>
<?php $heading = 'exclusive deals';
require(__DIR__ . "/../partials/banner.php");

require(__DIR__ . '/../../Database.php');

$db = new Database();
$products = $db->query('SELECT * FROM gamerstore.graphics_card;')->fetchAll(PDO::FETCH_ASSOC);
?>


<main>
    <?php
    $detail = 'memory';
    $detail2 = 'GB memory'
    ?>
    <?php require(__DIR__ . "/../partials/products-grid.php"); ?>
</main>
<?php require(__DIR__ . "/../partials/footer.php"); ?>
