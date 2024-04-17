<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RMS | Index</title>

    <!-- Bootstrap Core CSS -->
    <!-- <link href="bootstrap/bootstrap.min.css" rel="stylesheet"> -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="style.css" rel="stylesheet"> -->

    <!-- Custom CSS -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="custom.css" rel="stylesheet">
    
    <!-- <link rel="stylesheet" href="css/basic.style.css"> -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        /* Add custom styles here */
        .container {
            position: relative;
            height: 100vh; /* Full height of viewport */
        }

        .container1 {
            position: relative;
            height: 100vh; /* Full height of viewport */
        }
        .col-lg-4 {
            position: absolute;
            top: 35%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .login-box {
            width: 350px; /* Adjust width as needed */
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        /* Change header background color */
        .navbar-fixed-top {
            background-color: #000000; /* Change to your desired color */
        }
         /* Change navbar text color */
         .navbar-fixed-top .navbar-brand,
        .navbar-fixed-top .nav.navbar-nav.pull-right li a {
            color: #fff; /* Change to your desired color */
        }

        /* Change navbar link color on hover */
        .navbar-fixed-top .nav.navbar-nav.pull-right li a:hover,
        .navbar-fixed-top .nav.navbar-nav.pull-right li a:focus {
            color: #ccc !important; /* Change to your desired hover color */
        }
        


    </style>
</head>
    <body>

  <nav id="mainNav" class="nav navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand" href="#page-top"><span class="fa fa-money"></span> ONLINE REVENUE MANAGEMENT SYSTEM</a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav pull-right">

          <li class=""> <a class="dropdown-toggle" href="signup.php">Signup <i class="fa fa-sign-in"></i><span class="caret"></span> </a></li>
          <li class=""> <a class="dropdown-toggle" href="login.php">Login </a></li>
        </ul>
      </div><!-- /.navbar-collapse -->

    </div>
  </nav>

  <div class="container1">
    <div class="login-box">
        <div class="col-lg-4">
            <div class="row">
                <h2><span class="fa fa-users"></span> User Login</h2><br>
                <form role="form" method="post" action="index.php">
                    <div class="form-group">
                        <label for="name">Email address</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="name">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter Password">
                    </div>
                    <button type="submit" name="login" class="btn btn-primary btn-lg">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>




<!-- jQuery -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
