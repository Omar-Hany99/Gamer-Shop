
<?php require(__DIR__ . "/../partials/header.php"); ?>
<?php require(__DIR__ . "/../partials/nav.php"); ?>
<?php $heading = 'exclusive deals';
require(__DIR__ . "/../partials/banner.php");

require(__DIR__ . '/../../Database.php');

$db = new Database();
$products = $db->query('SELECT * FROM gamerstore.speakers;')->fetchAll(PDO::FETCH_ASSOC);
?>


<main>
    <?php
    $detail = 'wattage';
    $detail2 = ' watt'
    ?>
    <?php require(__DIR__ . "/../partials/products-grid.php"); ?>

</main>
<?php require(__DIR__ . "/../partials/footer.php"); ?>
