<!DOCTYPE html>
<html lang="en">
  <head>
	
    <meta charset="utf-8">
    <title>Party Finder</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="./css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="./css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
   <!-- <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png"> -->
  </head>

  <body>
  <script>
  function validate()
  {
	alert("Hi");
	if(document.registerform.elements[0].value == "")
	{
		alert("Please enter a valid foursquare id");
		return false;
	}
	return true;
  }
  </script>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#"></a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#"></a></li>
              <li><a href="#about"></a></li>
              <li><a href="#contact"></a></li>
            </ul>
            <form class="navbar-form pull-right">
            </form>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">


      <!-- Example row of columns -->
      <div class="row">
	  <form class = "registerform1" name = "registerform" onsubmit = "return validate()" action = "signin.php">
			<table name = "fields">
					<tr>
					<td>FoursquareID</td>
					<td><input class="span2" name = "foursquareid" type="text"><br/></td>
					</tr>
	                <tr>
					<td>Interests</td>
					<td><textarea name="comments" cols="25" rows="5"></textarea><br/></td>
					</tr>
					<tr>
					<td>Relationship status</td>	
					<tr><td></td><td><input class="span2" type="radio" name = "Sex">Single<br/></td></tr>
					<tr><td></td><td><input class="span2" type="radio" name = "Sex">Committed<br/></td></tr>
					<tr><td></td><td><input class="span2" type="radio" name = "Sex">Complicated<br/></td></tr>
					</tr>
			</table>
			<br/>
			<br/>
			<input class = "span2" type = "submit" value = "Register" />


	  </form>
        
      </div>

      <hr>

      <footer>
        <p>&copy; A HackNY App 2012</p>
      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap-transition.js"></script>
    <script src="../assets/js/bootstrap-alert.js"></script>
    <script src="../assets/js/bootstrap-modal.js"></script>
    <script src="../assets/js/bootstrap-dropdown.js"></script>
    <script src="../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../assets/js/bootstrap-tab.js"></script>
    <script src="../assets/js/bootstrap-tooltip.js"></script>
    <script src="../assets/js/bootstrap-popover.js"></script>
    <script src="../assets/js/bootstrap-button.js"></script>
    <script src="../assets/js/bootstrap-collapse.js"></script>
    <script src="../assets/js/bootstrap-carousel.js"></script>
    <script src="../assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>
