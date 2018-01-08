<!DOCTYPE html>

<?php
 session_start();
if ($_SESSION['user_logged_in'] == ''){
 header('location: login.php');
 }
 ?>
 
<html lang="en">
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Sean Grehan">
    <meta name="description" content="Website for the local football club">

    <title>Football Club</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
   
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
        <script language="JavaScript" src="gen_validatorv4.js" type="text/javascript" xml:space="preserve"></script>

</head>

<body>

	<div class="brand">Pipe's Football Club</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.php"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="register.php">Register</a>
                    </li>
                    <li>
                        <a href="login.php">Login</a>
                    </li>
                    <?php
                    include 'usernav.php';
					?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    
    </div>

    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Ask us a question!</strong>
                    </h2>
                    <hr>                        
                        <form method="post" action="captcha_script.php" name="myform" id="myform" align="center">
						<table bgcolor="#CCCCCC" align="center">
                        <tr><th>
                         Name: <input type="text" name="email">
                        </th></tr>
                        <tr><td>
                        &nbsp;
                        </td></tr>
						<tr><td align="center">Contact us (Post new message):</td></tr>
						<tr><td align="center"><textarea cols="30" rows="5" name="message"></textarea></td></tr>
                        &nbsp;
                       
                        
						<tr><td align="center">
        				Please type in the 3 green characters<br>
                        from the picture<br>

        				<table><tr align="center"><td align="center"><img src="captcha.php" alt="captcha image"></td><td style='padding-left:5px;'><input type="text" name="captcha" size="3" maxlength="3"></td></tr></table>
						</td></tr>
						</table>
                          &nbsp;
						  <h3 class="intro-text text-center">
                    	<input type="reset" name="reset" id="reset" value="Reset" class="intro-text text-center">
                        <input type="submit" name="submit" id="submit" value="Submit" class="intro-text text-center">
                    </h3>
                    &nbsp;
                    <h3 class="intro-text text-center">
					<div id="myform_errorloc" class="p1"></div>
                    </h3>
						</form>
                     <script language="JavaScript" type="text/javascript" xml:space="preserve">
						var frmvalidator  = new Validator("myform");
						frmvalidator.EnableOnPageErrorDisplaySingleBox();
						frmvalidator.EnableMsgsTogether();
 
						frmvalidator.addValidation("message","req","Please enter your query");
						frmvalidator.addValidation("firstname","maxlen=500","Sorry there is a 500 character limit");
					</script>
                        
                    </h2>
                    
                </div>
          </div>
</div>

    </div>
    <!-- /.container -->

 <footer>
    
		<div class='container'>
        <div class='row'>
            
                <div class='col-lg-4'>
                    <p style='padding:0;margin:0;'> <a href='sitemap.xml'>Link to sitemap</a> </p>
                </div>
                
                <div class='col-lg-4'>
					<div style='padding:0;margin-left:auto;margin-right:auto;text-align:center;'>
					    <a href='#'><i class='fa fa-facebook-square fa-2x'></i></a>
					    <a href='#'><i class='fa fa-twitter fa-2x'></i></a>
    					<a href='#'><i class='fa fa-google-plus fa-2x'></i></a>
  					</div>
                </div>
                <div class='col-lg-4'>
                <?php
                    include 'userlink.php';
					?>
                </div>
	</div>
	</div>
    
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

 
