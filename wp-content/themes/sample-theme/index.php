<?php require_once 'data.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <?php require_once 'meta.php'; ?>
</head>
<body <?php body_class($body_classes); ?> >
  <?php require_once 'analytics.php'; ?>
  <?php require_once 'header.php'; ?>
  <?php require_once $active_template . '.php'; ?>
  <?php require_once 'footer.php'; ?>
</body>
</html>