
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
	<link rel="stylesheet" type="text/css" href="main.css">
	    <script src="./bootstrap-3.1.1-dist/js/bootstrap.min.js">
	    </script>
	<link rel="stylesheet" href="./bootstrap-3.1.1-dist/css/bootstrap.css">
<script src="./bootstrap-3.1.1-dist/js/bootstrap.js" type="text/javascript"></script>
    <title>Static Top Navbar Example for Bootstrap</title>

<script>
  
	function clickStart(){
	  	window.open ('index.php','_self',false)
	  	return false;
	}

	function contactListener(){
	  	alert("hello contact");
	  	return false;
	}
	
	function clickProverka(){
		window.open ('start.php','_self',false)
		
		return false;
	}
	

	function clickProverka2(){
		window.open ('e2.php','_self',false);		
		return false;
	}
    </script>


    <!-- Bootstrap core CSS -->
    <link href="./bootstrap-3.1.1-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="navbar-static-top.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>


  <body role="document">

    <!-- Static navbar -->
    <div class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
	  <img src="logo_word.png" class="logo" align="right">
          <a class="navbar-brand" href="#" onclick="clickStart()"><b>ПРУФ</b></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#" onclick="clickStart()">Home</a></li>
            <li class="about"><a href="#about" onclick="clickProverka()">About</a></li>
            <li><a href="#contact" onclick="aboutListener()">Contact</a></li>
          </ul>
	  
        </div><!--/.nav-collapse -->
      </div>
    </div>

<div class="prosmotr" align="left" style="text-align:center">
  <br><br><br><br>
  <font style="font-size: 14px"><b>Чтобы перейти к комплектам документации, <br>нажмите кнопку:</b></font>
  <br><br><br>
	<div style= "text-align:center">
	<button type="button" class="btn_new" onclick="clickProverka2()">Prosmotr</button>
	</div>
	<!--<object width="60%" height="400px" type="application/pdf" data="./IBIZI3.pdf" ></object>-->

</div>


</div>
<div class="fotos" align="center">
  <h1>Разработчики</h1><br><br>
      
  <img src="ddd.png" alt="vova" class="img_circle" width="220px">&nbsp &nbsp &nbsp &nbsp  
  <img src="vvv.png" alt="vova" class="img_circle" width="220px">
  <div id="dasha"><b>Уфимцева Дарья </b></div><div id="vova"><b>Приходько Владимир</b></div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="bootstrap-3.1.1-dist/js/bootstrap.min.js"></script>

    </div>
  </body>
</html>
