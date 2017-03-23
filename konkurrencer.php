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
    <div class="panel-heading">
      <h1 class="panel-title-large">Konkurrencer</h1>
    </div>
    <div class="panel-body header-div">
          <div class="col-md-3 col-sm-6 col-xs-6 header-div-sub">
            <a  href="/counterstrike"><img class="img-responsive tournament-image" src="/images/cs-logo.png" alt="CS Tournament" height="80"></a>
            <button type="button" class="btn btn-default">Tilmeld</button>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-6 header-div-sub">
            <a href="/trackmania"><img class="img-responsive tournament-image" src="/images/trackmania-logo.png" alt="TM Tournament" height="80"></a>
            <button type="button" class="btn btn-default">Tilmeld</button>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-6 header-div-sub">
            <a href="/minecraft"><img class="img-responsive tournament-image" src="/images/minecraft-logo.png" alt="MC Tournament" height="80"></a>
            <button type="button" class="btn btn-default">Tilmeld</button>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-6 header-div-sub">
            <a href="/dinturnering"><img class="img-responsive tournament-image" src="/images/custom-logo.png" alt="Din Tournament" height="80"></a>
            <button type="button" class="btn btn-default">Tilmeld</button>
          </div>
        </div>
  </div>

  <?php include ROOT_DIR . '/includes/lower-body.php';?>
</body>
</html>