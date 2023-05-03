<?php

if (isset($_POST['name'])) {
    include('../classes/db.class.php');
    include('../classes/catalog.class.php');
    include('../classes/catalogcontrol.class.php');
    include('../classes/detailstype.class.php');

    $type = $_POST['productType'];

    $productType = new $type();
    $details = $productType->getDetails($_POST ['size'], $_POST ['weight'], $_POST ['height'], $_POST ['width'], $_POST ['length']);

    $sp = new CatalogControl($_POST ['sku'], $_POST['name'], $_POST['productType'], $_POST['price'], $details);

    $rr = $sp->add_product();
    header("location: ../index.php");
}
