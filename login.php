<html>

<head>
    <title>Login</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body class="with-top-navbar">
<div class="growl" id="app-growl"></div>

<nav class="navbar navbar-inverse navbar-fixed-top app-navbar">
    <div class="container" >

        <div class="navbar-collapse collapse" id="navbar-collapse-main">
            <ul class="nav navbar-nav navbar-right"  >

                <li><a href="Register.php">Register</a></li>
                <li><a href="login.php">Login</a></li>

                <li>
                    <a href="About.php">About Us</a>
                </li>
                <li>
                    <a href="Contact.php">Contact Us</a>
                </li>
            </ul>

        </div>
    </div>
</nav>
.<br/><br/><h1 style="text-align: center">Login</h1>
<form class="form-horizontal"  method="post" action="logincontroller.php" style="text-align: center">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="form-group">
        <div class="col-md-6">
            <input type="text" class="form-control" required="The Notifications field is required." name="email" placeholder="email" >
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-6">
            <input type="password" class="form-control" name="password" placeholder="password" required="The Notifications field is required." >
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-9 col-md-offset-3">
            <label><input id="TermsCB" type="checkbox" value="FALSE" class="checkbox-inline"  />  Remember me</label>
            <span id="TermsValidation" class="text-danger"></span>
        </div>
    </div>


    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" name="sub"  class="btn btn-primary">
                Login
            </button>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <a href="password.php" >
                I Forgot My Password
            </a>
        </div>
    </div>
    </form>
    </body>
</html>