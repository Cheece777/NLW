<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>NLW</title>
  
  <?php include filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/includes/body.php'; ?>
</head>

<body>
  <?php include filter_input(INPUT_SERVER, 'DOCUMENT_ROOT'). '/includes/upper-body.php'; ?>

  <div class="panel panel-primary">
    <div class="panel-heading">
      <h1 class="panel-title-large">Konkurrencer</h1>
    </div>
    <div class="panel-body header-div">
          <div class="col-md-4 col-sm-6 col-xs-6 header-div-sub">
            <a  href="<?php echo filter_input(INPUT_SERVER, '__DIR__').'/konkurrence/counterstrike';?>"><img class="img-responsive tournament-image" src="/images/cs-logo.png" alt="CS Tournament" height="80"></a>
            <!--<button type="button" class="btn btn-default">Tilmeld</button>-->
          </div>
          <div class="col-md-4 col-sm-6 col-xs-6 header-div-sub">
            <a href="<?php echo filter_input(INPUT_SERVER, '__DIR__').'/konkurrence/trackmania';?>"><img class="img-responsive tournament-image" src="/images/trackmania-logo.png" alt="TM Tournament" height="80"></a>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-6 header-div-sub">
            <a href="<?php echo filter_input(INPUT_SERVER, '__DIR__').'/konkurrence/minecraft';?>"><img class="img-responsive tournament-image" src="/images/minecraft-logo.png" alt="MC Tournament" height="80"></a>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-6 header-div-sub">
            <a href="<?php echo filter_input(INPUT_SERVER, '__DIR__').'/konkurrence/dinturnering';?>"><img class="img-responsive tournament-image" src="/images/custom-logo.png" alt="Din Tournament" height="80"></a>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-6 header-div-sub">
            <a href="<?php echo filter_input(INPUT_SERVER, '__DIR__').'/konkurrence/udendors';?>"><img class="img-responsive tournament-image" src="/images/custom-logo.png" alt="Udendors" height="80"></a>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-6 header-div-sub">
            <a href="<?php echo filter_input(INPUT_SERVER, '__DIR__').'/konkurrence/feelinglucky';?>"><img class="img-responsive tournament-image" src="/images/custom-logo.png" alt="Feeling lucky" height="80"></a>
          </div>
        </div>
  </div>

  <?php include filter_input(INPUT_SERVER, 'DOCUMENT_ROOT') . '/includes/lower-body.php';?>
</body>
</html>