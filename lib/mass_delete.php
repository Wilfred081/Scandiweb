<?php

include('../classes/db.class.php');
include('../classes/catalog.class.php');
include('../classes/catalogcontrol.class.php');

$sp = new CatalogControl(null, null, null, null, null);
$sp->mass_delete();
header("location: ../index.php");
