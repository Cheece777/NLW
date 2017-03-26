<?php
define('ROOT_DIR', dirname(__FILE__));
define('ROOT_URL', substr($_SERVER['PHP_SELF'], 0, - (strlen($_SERVER['SCRIPT_FILENAME']) - strlen(ROOT_DIR))));
?>

<!--  <a href="<?php echo $_SERVER['DOCUMENT_ROOT'].'hello.html'; ?>">go with php</a> -->

<script src="<?php echo $_SERVER['DOCUMENT_ROOT'].'dist/js/jquery-1.12.4.min.js';?>"></script>
      <script src="<?php echo $_SERVER['DOCUMENT_ROOT'].'dist/js/bootstrap.min.js';?>"></script>
      <script src="dist/js/jquery-1.12.4.min.js"></script>
      <script src="dist/js/bootstrap.min.js"></script>