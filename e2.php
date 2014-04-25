<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewporst" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
    <link rel="stylesheet" type="text/css" href="main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <title>Static Top Navbar Example for Bootstrap</title>

    <script>
        function delete_cookie ( cookie_name )
        {
            var cookie_date = new Date ( );  // Текущая дата и время
            cookie_date.setTime ( cookie_date.getTime() - 1 );
            document.cookie = cookie_name += "=; expires=" + cookie_date.toGMTString();
        }
        $(document).ready(function () {
            if(document.cookie.substr(document.cookie.lastIndexOf("access=")+"access=".length)=="yes"){
                $("#addButton").removeClass("disabled");
            }else{
                $("#addButton").addClass("disabled");
            }
        });
        function ClickView(string) {
            window.open('view.php?name=' + string, '_self', false)
            return false;
        }

        function signin(){
            if($("#name").val()=="admin" && $("#pass").val()=="admin"){
                delete_cookie("access");
                document.cookie = "access=yes";
            }else{
                delete_cookie("access");
                document.cookie = "access=no";
            }
            location.reload()
        }
        function aboutListener(){
        }
        function unauthcl(){
            delete_cookie("access");
            document.cookie = "access=no";
            location.reload()
        }
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
          <a class="navbar-brand" href="#" onclick="clickStart()"><b>ПРУФ</b></a>
        </div>
        <div class="navbar-collapse collapse">
            
            <button class="btn_new pull-right" id="unauth" onclick="unauthcl()">Sign Out</button>
            &nbsp &nbsp
            <button class="btn_new pull-right" id="auth" data-toggle="modal" data-target="#modalAuth">Sign In</button>
           
            <ul class="nav navbar-nav">
            <li class="active"><a href="#" onclick="clickStart()">Home</a></li>
            <li class="about"><a href="#about" onclick="clickProverka()">About</a></li>
            <li><a href="#contact" onclick="aboutListener()">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

<div class="page-header">
    <div style="text-align:center" class="page1block1">
        <br><br>
        <button class="btn_new disabled" id="addButton" data-toggle="modal" data-target="#myModal">
         Добавить
        </button>
        <div style="text-align:center" class="page1block2">
            <br><br>
    <div id="list">
    </div>
    </div>
  </div>
</div>

<?php
$dir = './resourse/';
$files1 = scandir($dir);
foreach ($files1 as &$value) {
    if (stripos($value, "pdf_") != 0) {
        $len = strlen($value);
        $dir = substr($value, 5);
        echo"
	    <script>
		$('#list').append('<li><button class=\"btn_doc btn_block\" id =\"$dir\" onclick=\"ClickView(this.id)\">$dir</a></li><br><br>');
	    </script>";
    }
}
?>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">

                <form class="well" enctype="multipart/form-data" action="my.php" method="post">
                    <label>Название</label>
                    <input type="file" min="1" max="9999" name="file[]" multiple="true"/>
                    <input name="name" type="text" class="span3" placeholder="Название документации">
                    <button type="submit" class="btn">Make</button>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalAuth" tabindex="-1" role="dialog" aria-labelledby="modalAuth" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="modalAuth">Modal title</h4>
            </div>
            <div class="modal-body">

                <div class="form-signin well">
                    <h2 class="form-signin-heading"  >Please sign in</h2>
                    <input id="name" name="name" type="text" class="input-block-level" placeholder="Name">
                    <input id="pass" name="pass" type="password" class="input-block-level" placeholder="Password">
                    <button class="btn btn-large btn-primary" onclick="signin()">Sign in</button>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="./bootstrap-3.1.1-dist/js/bootstrap.min.js"></script>
</body>
</html>
