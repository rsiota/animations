<!-- Bootstrap Paths -->
<?php 
$appPath = realpath(dirname(__FILE__));
defined('ESKIMO_PUBLIC_PATH') || define('ESKIMO_PUBLIC_PATH', $appPath . '/');
defined('ESKIMO_BASE_PATH') || define('ESKIMO_BASE_PATH', realpath(ESKIMO_PUBLIC_PATH . '..') . '/');
defined('BASE_FPATH') || define('BASE_FPATH', ESKIMO_BASE_PATH);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Animations</title>
    <link rel="stylesheet" href="/style.css">
    <script defer src="https://unpkg.com/alpinejs@3.9.5/dist/cdn.min.js"></script>
  </head>
  <body>
    <div class="hamburger-wrapper" x-data="{ menuOpen: false }">
      <div class="hamburger" @click="menuOpen = !menuOpen">
        <?php echo file_get_contents( ESKIMO_PUBLIC_PATH . "/hamburger.svg") ?>
      </div>
    </div>
  </body>
</html>