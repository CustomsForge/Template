<?php $page = $_GET['page'] ?>
<?php $root_url = $_SERVER['SERVER_PORT'] == "80" ? "/template" : "" ?>
<?php require 'helpers.php'; ?>

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
    <?php $templateName = "templates/{$page}.php"; ?>
    <?php include $templateName; ?>
    <?php echo $_SERVER['SERVER_PORT']; ?>
  </div>

  <?php include 'layout/footer.html'; ?>
</body>
</html>
