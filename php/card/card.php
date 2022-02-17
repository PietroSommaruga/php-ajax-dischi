<?php 

include __DIR__ . '/database/db.php';

?>


<div class="card">
        <img class="poster" src="<?php echo $disc['poster'] ?>" alt="poster" />
        <strong><?php echo strtoupper($disc['title']) ?></strong>
        <div class="name"><?php echo $disc['author'] ?></div>
        <div class="date"><?php echo $disc['year'] ?></div>
      </div>