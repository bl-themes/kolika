<!doctype html>
<html lang="<?php echo Theme::lang() ?>">
  <head>
    <?php include(THEME_DIR_PHP.'head.php'); ?>
  </head>
  <body>
  <?php Theme::plugins('siteBodyBegin'); ?>
  <?php include(THEME_DIR_PHP.'topbar.php'); ?>
  <?php
      if ($WHERE_AM_I == 'page') {
      if ($page->slug() == 'error') {
         include(THEME_DIR_PHP.'error.php');
      }
      else {
         include(THEME_DIR_PHP.'page.php');
      }
   } else {
   include(THEME_DIR_PHP.'home.php');
  }
    ?>
  <?php include(THEME_DIR_PHP.'footer.php'); ?>
  <?php
    echo Theme::js('js/bootstrap.bundle.min.js');
  ?>
  <?php Theme::plugins('siteBodyEnd'); ?>
  </body>
</html>