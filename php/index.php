<?php 

include __DIR__ . '/database/db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <header>
    <img src="https://upload.wikimedia.org/wikipedia/commons/1/19/Spotify_logo_without_text.svg" alt="spotify logo" class="logo"/>
  </header>
  <main>
    <?php
      foreach ($db as $disc) {
    ?>
      <div class="card">
        <img class="poster" src="<?php echo $disc['poster'] ?>" alt="poster" />
        <strong><?php echo strtoupper($disc['title']) ?></strong>
        <div class="name"><?php echo $disc['author'] ?></div>
        <div class="date"><?php echo $disc['year'] ?></div>
      </div>
    <?php
      }
    ?>
 </main>
     
</body>

</html>