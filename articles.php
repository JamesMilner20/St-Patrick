<?php

  if ($_POST["submit"]){

    if (!$_POST['name']) {
      $error="<br />Please enter your name";
    }
    if (!$_POST['email']) {
      $error.="<br />Please enter your email";
    }
    if (!$_POST['article']) {
      $error.="<br />Please post your article or poem";
    }

    if ($error) {
      $result ='<div class="alert alert-danger"><strong>There were error(s) in the form:</strong>'.$error.'</div>';
    } else {

      if (mail("james@smaarv.com","coming from website","Name: ".$_POST['name']."

      Email: ".$_POST['email']."

      Comment: ".$_POST['article'])) {

      $result ='<div class="alert alert-success">Thank you. Your post has been sent to the administrator to be reviewed</div>';

      } else {
        $result ='<div class="alert alert-danger"><strong>Sorry. There was an error. Please try again later</strong></div>';
      }
    }
  }


?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css\bootstrap.css">
  <link rel="stylesheet" href="css\styles.css">
  <script src="js\jquery-3.2.1.js" charset="utf-8"></script>
  <script src="js\bootstrap.min.js" type="text/javascript"></script>
  <script src="js\scripts.js" type="text/javascript"></script>
  <title>St Patrick</title>
</head>

<body>
<!-- <h2><?php echo "Hello. Today is " . date('l'); ?>.</h2> -->

  <nav class="navbar part1a navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header part1b">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a class="navbar-brand" href="#">
          <p>St Patrick</p>
        </a>
      </div>
      <div class="collapse navbar-collapse navbar-right" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="index.html">Home</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">About St. Patrick C. C. <span class="caret"></span></a>
            <ul class="dropdown-menu navDropdown">
              <li><a href="history.html">History</a></li>
              <li><a href="leadership.html">Leadership</a></li>
              <li><a href="Societies.html">Societies</a></li>
              <li><a href="Ministries.html">Ministries</a></li>
            </ul>
          </li>
          <li><a href="Community.html">St. Patrick Community</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Weeklies<span class="caret"></span></a>
            <ul class="dropdown-menu navDropdown">
              <li><a href="Reflections.html">Reflections</a></li>
              <li><a href="bulletin.html">Bulletin</a></li>
              <li><a href="Readings.html">Readings</a></li>
            </ul>
          </li>
          <li class="active"><a href="articles.php">Articles</a></li>
        </ul>
      </div>
    </div>
  </nav>


  <div class="container fluid">
    <div class="article">
      <h3>Post an article or poem. This article will be published in the weekly bulletin</h3>
      <?php echo $result; ?>

      <form method="post">
        <div class="form-group">

          <label for="name">Your Name:</label>
          <input class="form-control" type="text" name="name" placeholder="Your Name:" value="<?php echo $_POST['name']; ?>"/>

        </div>

        <div class="form-group">

          <label for="email">Your Email:</label>
          <input class="form-control" type="email" name="email" placeholder="Your Email:" value="<?php echo $_POST['email']; ?>"/>

        </div>

        <div class="form-group">

          <label for="article">Post Article:</label>
          <textarea class="form-control" name="article" rows="8" cols="80"><?php echo $_POST['article']; ?></textarea>

        </div>

        <input type="submit" name="submit" class="btn btn-lg btn-success" value="Submit">
      </form>

  </div>
  </div>

      <!-- <form>
          <label type="textarea" name="article" for="textarea">Post an article</label>
          <textarea class="form-control" rows="5" id="comment"></textarea>

          <br>
          <button type="button" id="myBtn" class="btn btn-info">Submit</button>
        </form>

          <div class="modal" id="myModal" role="dialog">
            <div class="modal-dialog">

              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Author of this Article</h4>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                      <label for="usr">Surname:</label>
                      <input type="text" class="form-control" id="usr">
                    </div>
                    <div class="form-group">
                      <label for="usr">Other names:</label>
                      <input type="text" class="form-control" id="usr">
                    </div>
                    <div class="form-group">
                      <label for="email">Email address:</label>
                      <input type="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                      <label for="sel1">Are you a Parishner?:</label>
                      <select class="form-control" id="sel1">
                        <option>Yes</option>
                        <option>No</option>
                      </select>
                    </div>
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Submit</button>
                </div>

              </div>
            </div>
          </div>

    </div>
  </div>
 -->



  <div class="footer part5">
    <div class="container">
      <div class="part5a">
        <h3>Visit us</h3>
      </div>
      <div class="container part5c">
        <div class="col-md-3 panel-primary">
          <h4>Mass Schedules</h4>

        </div>
        <div class="col-md-3">
          <p><i class="fa fa-phone" aria-hidden="true"></i> +233 274 890 3546</p>
          <p><i class="fa fa-envelope-o" aria-hidden="true"></i> nvestghana@gmail.com</p>
          <p><i class="fa fa-location-arrow" aria-hidden="true"></i> East Legon,</p>
          <p>P.O.Box 1234, Accra-North,</p>
          <p>Banana Street.</p>
        </div>

        <div class="col-md-3">
          <p><i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook</p>
          <p><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</p>
          <p><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</p>
          <p><i class="fa fa-linkedin" aria-hidden="true"></i> LinkedIn</p>
        </div>
        <div class="col-md-3">

        </div>

      </div>

      <div class="copy">
        <p><i class="fa fa-copyright copyright" aria-hidden="true"></i> Copyright 2017. St. Patrick Catholic Church - Dome/Atomic</p>
      </div>
    </div>
  </div>



</body>

</html>
