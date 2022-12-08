<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:min-height="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>Egzamin</title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/font.css">
  <script src="js/jquery.js" type="text/javascript"></script>

  <script src="js/bootstrap.min.js" type="text/javascript"></script>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
  <!--alert message-->
  <?php if (@$_GET['w']) {
    echo '<script>alert("' . @$_GET['w'] . '");</script>';
  }
  ?>
  <!--alert message end-->

</head>

<body>

  <!--header start-->
  <div class="row header">
    <div class="col-lg-6">
      <span class="logo">Egzamin</span>
    </div>
    <div class="col-md-2">
    </div>
    <div class="col-md-4">
      <?php
      include_once 'dbConnection.php';
      session_start();
      if ((!isset($_SESSION['email']))) {
        echo '<a href="#" class="pull-right sub1 btn title3" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;Zaloguj</a>&nbsp;';
      } else {
        echo '<a href="logout.php?q=feedback.php" class="pull-right sub1 btn title3"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Wyloguj</a>&nbsp;';
      }
      ?>

      <a href="index.php" class="pull-right btn sub1 title3"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Menu</a>&nbsp;
    </div>
  </div>

  <!--sign in modal start-->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content title1">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title title1"><span style="color:blue">Zaloguj</span></h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" action="login.php?q=index.php" method="POST">
            <fieldset>


              <!-- Text input-->
              <div class="form-group">
                <label class="col-md-3 control-label" for="email"></label>
                <div class="col-md-6">
                  <input id="email" name="email" placeholder="Podaj e-mail" class="form-control input-md" type="email">

                </div>
              </div>

              <!-- Password input-->
              <div class="form-group">
                <label class="col-md-3 control-label" for="password"></label>
                <div class="col-md-6">
                  <input id="password" name="password" placeholder="Podaj hasło" class="form-control input-md" type="password">

                </div>
              </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Zamknij</button>
          <button type="submit" class="btn btn-primary">Zaloguj</button>
          </fieldset>
          </form>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  <!--sign in modal closed-->

  <!--header end-->


  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6 panel" ; min-height:750px;">
      <h2 align="center" style="font-family:'typo'; color:#000066">Opinia | Zgłaszanie problemu</h2>
      <div style="font-size:14px">
        <?php if (@$_GET['q']) echo '<span style="font-size:18px;"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;' . @$_GET['q'] . '</span>';
        else {
          echo ' 
Możesz przesłać nam swoją zgłoszenie e-mailem na następujący e-mail:<br />
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10">
<a href="Antek@gmail.com" style="color:#000000">Antek@gmail.com</a><br /><br />
</div><div class="col-md-1"></div></div>
<p>Możesz też bezpośrednio przesłać swoją zgłoszenie, wypełniając poniższe pola:</p>
<form role="form"  method="post" action="feed.php?q=feedback.php">
<div class="row">
<div class="col-md-3"><b>Nazwa:</b><br /><br /><br /><b>Temat:</b></div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group">
  <input id="name" name="name" placeholder="Podaj nazwę" class="form-control input-md" type="text"><br />    
   <input id="name" name="subject" placeholder="Podaj temat" class="form-control input-md" type="text">    

</div>
</div>
</div><!--End of row-->

<div class="row">
<div class="col-md-3"><b>Adres E-Mail:</b></div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group">
  <input id="email" name="email" placeholder="Podaj e-mail" class="form-control input-md" type="email">    
 </div>
</div>
</div><!--End of row-->

<div class="form-group"> 
<textarea rows="5" cols="8" name="Zgłoszenie" class="form-control" placeholder="Napisz zgłoszenie tutaj :"></textarea>
</div>
<div class="form-group" align="center">
<input type="submit" name="submit" value="Potwierdź" class="btn btn-primary" />
</div>
</form>';
        } ?>
      </div>
      <!--col-md-6 end-->
      <div class="col-md-3"></div>
    </div>
  </div>
  </div>
  </div>
  <!--container end-->


  <?php include 'footer.php'; ?>

</body>

</html>