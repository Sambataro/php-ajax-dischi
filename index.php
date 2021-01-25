<?php include __DIR__ . "/database.php"; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
    <header>
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS0QwjSeZvgA57NRJ9AotM5No0mjK7YZKZbNQ&usqp=CAU" alt="logo-spotify">
    </header>
    <div id="app">
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
