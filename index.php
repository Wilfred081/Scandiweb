<?php
    include('./classes/db.class.php');
    include('./classes/catalog.class.php');
    include('./classes/catalogview.class.php');
    $sp = new CatalogView();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
    <title>My Products</title>
    <style type="text/css"></style>
  </head>
  <body>
    <form action="./lib/mass_delete.php" method="post">
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">Product List</a>
          <div class="d-flex grid gap-3">
            <a class="btn btn-outline-success" href="./add-product/">ADD</a>
            <button class="btn btn-danger" href="" name="submit" type="submit">
              MASS DELETE
            </button>
          </div>
        </div>
      </nav>

      <div style="padding: 10vh" class="container text-center">
        <?php $sp->display_products(); ?>
      </div>
    </form>
  </body>
</html>
