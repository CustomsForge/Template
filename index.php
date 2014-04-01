<?php $root_url = $_SERVER['SERVER_PORT'] == "80" ? "/template" : "" ?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>CustomsForge Template</title>

  <link rel="stylesheet" href="assets/sass/themes/default/theme.css">
</head>
<body>

  <?php include 'layout/topbar.html'; ?>
  <?php include 'layout/navigation.html'; ?>
  
  <div id="main">
    <?php $templateName = "templates/{$_GET['page']}.php"; ?>
    <?php include $templateName; ?>
  </div>

  <?php include 'layout/footer.html'; ?>
</body>
</html>
