<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>

    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>

    <link rel="stylesheet" type="text/css" href="main.css">
    <title>Static Top Navbar Example for Bootstrap</title>

    <script>
        $(document).ready(function () {
            var tmp = document.location.toString();
            var int_last = tmp.lastIndexOf("?name=");
            str_name_file = "./resourse/_pdf_" + tmp.substr(int_last + "?name=".length);
        });
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
        function view_pdf(string) {
            $('#pdf').html('<object width="75%" height="525px" id="object" type="application/pdf" data= ' + str_name_file + '/' + string + '></object>');
            return false;
        }
        function back() {
            history.back();
            return false;
        }
    </script>

    <!-- Bootstrap core CSS -->
    <link href="./bootstrap-3.1.1-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="navbar-static-top.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]>
    <script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

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
          <a class="navbar-brand" href="#" onclick="clickStart()"><b>опст</b></a>
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

<div class="page-header">
    <div class="container-fluid">
        <div class="row" id="my">
            <div class="col-sm-3 col-md-2 sidebar" id="block_left">
                <ul class="nav nav-sidebar" id="navbar">
                </ul>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <button class="btn_new btn_block" id="back" onclick="back()">
                Back
                </button>
                <br><br><br><br><br>
            </div>
            <div id="pdf"></div>
        </div>
    </div>
    
</div>
<?php
header("Content-type: text/html; charset=utf-8");
$dir = ".\\resourse\\_pdf_" . $_GET['name'];
$files1 = scandir($dir);
$count = count($files1);
$array_pdf = array();
foreach ($files1 as &$value) {
    if (stripos($value, "pdf")) {
        array_push($array_pdf, $value);
        echo"
			<script>				
				$('#navbar').append('<li class=\"li_hover\"><a href=\"#\" id =\"$value\" onclick=\"view_pdf(this.id)\">$value</a></li>');
			</script>
		";
    }
}
?>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="./bootstrap-3.1.1-dist/js/bootstrap.min.js"></script>
</body>
</html>
