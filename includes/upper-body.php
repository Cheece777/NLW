<div class="container-fluid">
  <div class="row">
    <div class="col-sm-1 col-lg-2"></div>
    <div class="col-sm-10 col-lg-8">
      
      <!-- ### HEADER ### --> 
      
      <script src="<?php echo filter_input(INPUT_SERVER, '__DIR__').'/dist/js/jquery-1.12.4.min.js';?>"></script>
      <script src="<?php echo filter_input(INPUT_SERVER, '__DIR__').'/dist/js/bootstrap.min.js';?>"></script>
      
      <nav class="navbar navbar-default">
        <!--<div class="container-fluid">
          <div class="row">
            <div class="header-div">
              <div class="header-div-sub">
                <a href="/"><img class="img-responsive" src="images/logo.png" alt="NLW Logo" height="100"></a>
              </div>
              <div class="header-div-sub">
                <p><a class="btn btn-default btn-lg" href="https://place2book.com/da/choose_seating_sales_workflow?seccode=fd8e8f14aa" role="button">KØB BILLET</a></p>
              </div>
              <div class="header-div-sub">
                <a href="/"><img class="img-responsive" src="images/logo.png" alt="NLW Logo" height="100"></a>
              </div>
            </div>
          </div>
        </div>-->
        
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo filter_input(INPUT_SERVER, '__DIR__').'/';?>">NLW</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li><a href="https://place2book.com/da/choose_seating_sales_workflow?seccode=fd8e8f14aa"><b>Køb Billet</b></a></li>
              <li><a href="<?php echo filter_input(INPUT_SERVER, '__DIR__').'/generelt';?>">Generelt</a></li>
              <li><a href="<?php echo filter_input(INPUT_SERVER, '__DIR__').'/regler';?>">Regler og huskeliste</a></li>
              <li class="dropdown">
                <a href="<?php echo filter_input(INPUT_SERVER, '__DIR__').'#';?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Næste NLW<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo filter_input(INPUT_SERVER, '__DIR__').'/program';?>">Program</a></li>
                  <li><a href="<?php echo filter_input(INPUT_SERVER, '__DIR__').'/konkurrencer';?>">Konkurrencer</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="<?php echo filter_input(INPUT_SERVER, '__DIR__').'#';?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bagom NLW<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo filter_input(INPUT_SERVER, '__DIR__').'/crew';?>">Arrangører</a></li>
                  <li><a href="<?php echo filter_input(INPUT_SERVER, '__DIR__').'/historie';?>">Historien om NLW</a></li>
                </ul>
              </li>
            </ul>

            <!-- Nav Bar right side -->
            <ul class="nav navbar-nav navbar-right">
              <li><a href="<?php echo filter_input(INPUT_SERVER, '__DIR__').'/kontakt';?>">Kontakt</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
        
        <!--<div class="container-fluid">
          <div class="row">
            <div class="header-div">
              <div class="header-div-sub">
                
              </div>
              <div class="header-div-sub">
                
              </div>
              <div class="header-div-sub">
                
              </div>
              <div class="header-div-sub">
                
              </div>
            </div>
          </div>
        </div>-->
        
      </nav>

