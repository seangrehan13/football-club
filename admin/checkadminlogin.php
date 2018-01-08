<?php
session_start();

 # connect to the database
        include 'connect.php';

$tbl_name="admin"; // Table name

// username and password sent from form
$email=$_POST['email'];
$password=$_POST['password'];

// To protect MySQL injection (more detail about MySQL injection)
 $email = stripslashes($email);
 $password = stripslashes($password);
 $email = mysql_real_escape_string($email);
 $password = mysql_real_escape_string($password);
 
 $sql="SELECT * FROM Register WHERE email='$email' and password='$password'";
 $result=mysql_query($sql);

// Mysql_num_row is counting table row
 $count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

  if($count==1){

// Record that the user is logged in and redirect to file "login_success.php"
  $_SESSION['user_logged_in'] = "1";
  header("location:adminarea.php");
  }
  else {
  
  print "<head>

    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name='author' content='Yuly Ramos'>
    <meta name='description' content='Website for the local football club'>

    <title>Pipe's Football Club</title>

    <!-- Bootstrap Core CSS -->
    <link href='css/bootstrap.min.css' rel='stylesheet'>

    <!-- Custom CSS -->
    <link href='css/business-casual.css' rel='stylesheet'>

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic' rel='stylesheet' type='text/css'>

    <link href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' rel='stylesheet'>
   
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
  <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js'></script>
        <script src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js'></script>
    <![endif]-->

</head>

<body>

    <div class='brand'href='#'style='font-family:corbel'><span style='color: white'>Pipe's Football Club</span></div>

    <!-- Navigation -->
    <nav class='navbar navbar-default' role='navigation'>
        <div class='container'>
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class='navbar-header'>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class='navbar-brand' href='index.html'></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
                <ul class='nav navbar-nav'>
                    <li>
                        <a href='index.php'>Home</a>
                    </li>
                    <li>
                        <a href='register.php'>Register</a>
                    </li>
                    <li>
                        <a href='login.php'>Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class='container'>
        <div class='row'>
            <div class='box'>
                <div class='col-lg-12'>
                    <hr>
                    <h2 class='intro-text text-center'>
                        <strong>The username or password is incorrect :-(</strong>
                    </h2>
                    <hr>
                    
                </div>
          </div>
</div>

    </div>
    <!-- /.container -->

    <footer style='padding-top:10px;padding-bottom:10px'>

        
  <div class='container'>
    <div style='padding:0;margin:0;' class='navbar-text pull-left'>
      <p style='padding:0;margin:0;'> <a href='sitemap.xml'>Link to sitemap</a> </p>
</div>

  <div style='padding:0;padding-left:20px;margin:0;' class='navbar-text' pull-right>
    <a href='#'><i class='fa fa-facebook-square fa-2x'></i></a>
    <a href='#'><i class='fa fa-twitter fa-2x'></i></a>
    <a href='#'><i class='fa fa-google-plus fa-2x'></i></a>
  </div>
  </div>
</div>
    </footer>

    <!-- jQuery -->
    <script src='js/jquery.js'></script>

    <!-- Bootstrap Core JavaScript -->
    <script src='js/bootstrap.min.js'></script>

</body>
";	
  
  }
 ?>
