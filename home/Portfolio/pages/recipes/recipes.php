<?php
include 'queries/recipeQuery.php';
?>
<link rel="stylesheet" href="recipe.css">

<div class="container">

  <div class="div row">
    <div class="col">
      <h1><?= html_escape($recipe['name']) ?></h1>
      <img src="media/images/<?= html_escape($recipe['file']) ?>" class="img-fluid" alt="<?= html_escape($recipe['alt']) ?>" width=50%>
    </div>
    <div class="col-2">
      <div><?= html_escape($recipe['ingredients']) ?></div>
      <div><?= html_escape($recipe['preparation']) ?></div>
    </div>
  </div>
  
</div>

<script src="/home/Portfolio/functions/functions.js"></script>
<script type="text/javascript">
  setStyle();
</script>