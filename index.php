<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>Nøvling Lan Week</title>
  
  <link rel="shortcut icon" href="/images/favicon.ico"/>
  <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
  <!-- Optional Bootstrap theme -->
  <link rel="stylesheet" href="dist/css/custom-bootstrap.css">
</head>

<body>
  <?php
  include 'init.php';
  include ROOT_DIR . '/includes/upper-body.php';?>
  
  <div class="row">
    <div class="col-md-6">
      <div class="jumbotron">
        <div class="container">
          <h1>Nyheder</h1>
          <div id="fb-root"></div>
            <script>(function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = "//connect.facebook.net/da_DK/sdk.js#xfbml=1&version=v2.8";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
          <div class="fb-page" data-href="https://www.facebook.com/NovlingLANWeek/" data-tabs="timeline" data-width="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/NovlingLANWeek/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/NovlingLANWeek/">Nøvling LAN Week - NLW</a></blockquote></div>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="jumbotron">
        <h1>Konkurrencer</h1>
        <div class="panel-body">
          <div class="col-lg-6">
            <img class="media-object" src="/images/cs-logo.png" alt="CS Tournament" height="120" width="120">
          </div>
          <div class="col-lg-6">
            <img class="media-object" src="/images/trackmania-logo.png" alt="TM Tournament" height="120" width="120">
          </div>
          <div class="col-lg-6">
            <img class="media-object" src="/images/minecraft-logo.png" alt="MC Tournament" height="120" width="120">
          </div>
          <div class="col-lg-6">
            <img class="media-object" src="/images/custom-logo.png" alt="Din Tournament" height="120" width="120">
          </div>
        </div>
      </div>
    </div>
  </div>
  
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