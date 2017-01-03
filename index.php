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

  <div class="jumbotron">
    <div class="container">
      <h1>Program</h1>
      <div class="media">
        <div class="media-left">
          <img class="img-rounded" src="images/logo-program.PNG" alt="program-logo" height="170px" width="170px">
        </div>
        <div class="media-body">
          <p>Læs her program oversigten over det kommende NLW</p>
          <p><a class="btn btn-default btn-lg" href="/program-oversigt" role="button">Program</a></p>
        </div>
      </div>
    </div>
  </div>

  <div class="jumbotron">
    <div class="container">
      <h1>Kontakt</h1>
      <p>Tag kontakt til NLW's crew hvis du har spørgsmål omkring arrangementet</p>
      <p><a class="btn btn-default btn-lg" href="/kontakt" role="button">Kontakt</a></p>
    </div>
  </div>
  

  <?php include ROOT_DIR . '/includes/lower-body.php';?>
</body>
</html>