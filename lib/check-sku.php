<?php

    header('Access-Control-Allow-Origin: *');
    header("Content-Type: application/json; charset=UTF-8");
    header('Access-Control-Allow-Methods: *');

    $method = $_SERVER['REQUEST_METHOD'];

    if ($method == 'GET') {
        include('../classes/db.class.php');
        include('../classes/catalog.class.php');
        include('../classes/catalogcontrol.class.php');

        $catalog = new CatalogControl(null, null, null, null, null);

        $sku = $_GET['sku'];
        $response =  $catalog->checkSku($sku);

        $json_response = json_encode($response);
        exit($json_response);
    }
