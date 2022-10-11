<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Module PHP David</title>
    <link rel="stylesheet" href="./assets/CSS/style.css">
</head>
<body>
<?php
echo '<form action="" method="get" class="form-example">
          <div class="form-example">
               <label for="name">Enter your name: </label>
               <input type="text" name="name" id="name" required>
          </div>
          <div class="form-example">
                <label for="email">Enter your email: </label>
                <input type="email" name="email" id="email" required>
          </div>
          <div class="form-example">
                <input type="submit" value="Subscribe!">
          </div>
    </form>';
?>
</body>
</html>
