<?php require_once "../action/database.php"; ?>
<html>

<head>
</head>

<body>
  <?php require "adminnav.php"; ?>
  <h1>Liste des utilisateurs</h1>
  <?php
   $sql = "SELECT * FROM user";
   $pre = $pdo->prepare($sql);
   $pre->execute();
   $data = $pre->fetchAll(PDO::FETCH_ASSOC);

   foreach ($data as $user) { ?>
  <div class="bloc_user">
    <h2>
      <?php echo $user['username'] ?>
    </h2>
    <span class="email">
      <?php echo $user['email'] ?>
    </span>
  </div>

  <input type="submit" id='submit' value='Modifier'>
  <?php } ?>
</body>

</html>