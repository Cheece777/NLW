<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>NLW</title>
  
  <link rel="shortcut icon" href="/images/favicon.ico"/>
  <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
  <!-- Optional Bootstrap theme -->
  <link rel="stylesheet" href="dist/css/custom-bootstrap.css">
</head>

<body>
  <?php
  include 'init.php';
  include ROOT_DIR . '/includes/upper-body.php';?>

    <div class="panel panel-primary">
      <!-- Default panel contents -->
      <div class="panel-heading">Program oversigt</div>
      <div class="panel-body">
        <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#fredag">Fredag</a></li>
          <li><a data-toggle="tab" href="#lørdag">Lørdag</a></li>
          <li><a data-toggle="tab" href="#søndag">Søndag</a></li>
        </ul>

        <div class="tab-content">
          <div id="fredag" class="tab-pane fade in active">
            <?php include ROOT_DIR . '/program-includes/fredag.php';?>
          </div>
          <div id="lørdag" class="tab-pane fade">
            <?php include ROOT_DIR . '/program-includes/lordag.php';?>
          </div>
          <div id="søndag" class="tab-pane fade">
            <?php include ROOT_DIR . '/program-includes/sondag.php';?>
          </div>
        </div>
      </div>
    </div>

  <?php include ROOT_DIR . '/includes/lower-body.php';?>
</body>
</html>