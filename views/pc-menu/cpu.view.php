
<?php require(__DIR__ . "/../partials/header.php"); ?>
<?php require(__DIR__ . "/../partials/nav.php"); ?>
<?php $heading = 'exclusive deals';
require(__DIR__ . "/../partials/banner.php");

require(__DIR__ . '/../../Database.php');

$db = new Database();
$products = $db->query('SELECT * FROM gamerstore.cpu;')->fetchAll(PDO::FETCH_ASSOC);
?>


<main>
    <?php
    $detail = 'core_count';
    $detail2 = ' cores'
    ?>
    <?php require(__DIR__ . "/../partials/products-grid.php"); ?>
</main>
<?php require(__DIR__ . "/../partials/footer.php"); ?>
