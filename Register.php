<html>

<head>
 <title>Register</title>
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
.<br/></br><h1 style="text-align: center">Register</h1>
<form class="form-horizontal"  method="post" action="registercontroller.php" >
 <input type="hidden" name="_token" value="{{ csrf_token() }}">

 <div class="form-group">
  <label class="col-md-4 control-label">email</label>
  <div class="col-md-6">
   <input type="text" class="form-control" required="The Notifications field is required." name="email" maxlength="30">
  </div>
 </div>

 <div class="form-group">
  <label class="col-md-4 control-label">password</label>
  <div class="col-md-6">
   <input type="password" class="form-control" name="password" required="The Notifications field is required." >
  </div>
 </div>

 <div class="form-group">
  <label class="col-md-4 control-label">confirmPassword</label>
  <div class="col-md-6">
   <input type="password" class="form-control" name="confirmPassword" required="The Notifications field is required.">
  </div>
 </div>

 <div class="form-group">
  <label class="col-md-4 control-label">username</label>
  <div class="col-md-6">
   <input type="text" class="form-control" name="username" required="The Notifications field is required.">
  </div>
 </div>
 <div class="form-group">
  <label class="col-md-4 control-label">name</label>
  <div class="col-md-6">
   <input type="text" class="form-control" name="name" data-val-required="The Notifications field is required.">
  </div>
 </div>
 <div class="form-group">
  <label class="col-md-4 control-label">personalImage</label>
  <div class="col-md-6">
   <input type="file" class="form-control" name="image">

  </div>
 </div>
 <div class="form-group">
  <div class="col-md-9 col-md-offset-3">
   <label><input checked="" class="checkbox-inline" data-val="true" data-val-required="The Notifications field is required." id="Notifications" name="Notifications" type="checkbox" value="TRUE" />Notifications </label>
  </div>
 </div>
 <div class="form-group">
  <div class="col-md-9 col-md-offset-3">
   <label><input id="TermsCB" type="checkbox" value="FALSE" class="checkbox-inline" data-val-required="The Notifications field is required." />  I have read and accept the Terms and Conditions</label>
   <span id="TermsValidation" class="text-danger"></span>
  </div>
 </div>


 <div class="form-group">
  <div class="col-md-6 col-md-offset-4">
   <button type="submit" name="sub" class="btn btn-primary">
    Register
   </button>
  </div>
 </div>
</form>
</body>
</html>