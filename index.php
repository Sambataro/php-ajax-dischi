<?php include "database.php"; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
    <div id="app">
      <?php include "partials/header.php" ?>
      <main>
        <?php foreach ($discs as $disc) { ?>
        <div class="cd">
          <img src="<?php echo $disc["poster"]; ?>" alt="disc-cover">
          <div class="info">
            <h2><?php echo $disc["title"]; ?></h2>
            <h4><?php echo $disc["author"]; ?></h4>
            <h4><?php echo $disc["genre"]; ?></h4>
            <p><?php echo "'" . $disc["year"] . "'" ;?></p>
          </div>
        </div>
      <?php } ?>
      </main>

    </div>

  </body>
</html>
