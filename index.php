<?php
    require 'lib/main.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>warmy - my smart homepage</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        body{
            background-image: url('res/background.jpg');
        }

        source{
            display: inline-block;
            width: 100%;
        }

        info{
            position: float;
            width: 33%;
            float: right;
        }
    </style>
  </head>

  <body style="background-image: url('res/background.jpg');">

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><?php echo date("M d Y") ?></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="#"></a></li>
            <li><a href="#about"></a></li>
            <li><a href="#contact"></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container" style="background-color: rgba(0, 0, 0, 0.5); color: white;">

      <div class="starter-template">
        <h1>
            <?php WelcomeMessage(); ?>,
        </h1>

        <p class="lead">
            <?php (IsNewMessages()) ? (AlertNew()) : ("No new messages") ; ?>
        <i class="icon-eye-open"></i></p> 
        <source>
          <info>
            <table class="table table-hover">
              <tbody>
                <?php
                    GenerateData("reddit", "table", 25);
                ?>
              </tbody>
            </table>
          </info>
          <info>
            <table class="table table-hover">
              <tbody>
                <?php
                    GenerateData("reddit", "table", 25);
                ?>
              </tbody>
            </table>
          </info>
          <info>
            <table class="table table-hover">
              <tbody>
                <?php
                    GenerateData("reddit", "table", 25);
                ?>
              </tbody>
            </table>
          </info>
        </source>
      </div>
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
