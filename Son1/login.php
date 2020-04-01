<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="./css/style.css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" >
</head>
<body>

  <a class="goto"  href="Home.php"> <i class="fa fa-home"></i></a>
  
  <div class="form">
 <?php
 require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['submit'])){
        // removes backslashes
 $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
 $username = mysqli_real_escape_string($con,$username); 
$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	$mobile = stripslashes($_REQUEST['mobile']);
	$mobile = mysqli_real_escape_string($con,$mobile);
	$gender = stripslashes($_REQUEST['gender']);
	$gender = mysqli_real_escape_string($con,$gender);
	$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date,mobile,gender)
VALUES ('$username', '".md5($password)."', '$email', '$trn_date','$mobile','$gender')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Please Login</div>";
        }
     
}
 require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['submitlogin'])){
        // removes backslashes
 $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
 $username = mysqli_real_escape_string($con,$username);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
 //Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username'
and password='".md5($password)."'";
 $result = mysqli_query($con,$query) or die(mysql_error());
 $rows = mysqli_num_rows($result);
        if($rows==1){
     $_SESSION['username'] = $username;
            // Redirect user to index.php
     header("Location: index.php");
         }else{
 echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
</div>";
	}
 
    }
?>

 
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Sign Up</h1>
          
         <form name="registration" action="" method="post" onSubmit="return(validate88());">
		  
            <div class="field-wrap">
              <label>
                Name 
              </label>
              <input type="text" required name="username" id="name"  />
            </div>
         

          <div class="field-wrap">
            <label>
              Email Address 
            </label>
            <input type="email"required name="email"  id="email"  />
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password 
            </label>
            <input type="password"required name="password" id="password"  />
          </div>
		  <div class="top-row">
		   <div class="field-wrap">
           
           <select name="gender" id="sex">
		   
			<option>Male</option>
			<option>Female</option>
		   </select>
          </div>
		   <div class="field-wrap">
            <label>
             Age 
            </label>
            <input type="text" name="age" id="age"  />
          </div>
		  </div>
		    <div class="field-wrap">
            <label>
              Mobile 
            </label>
            <input type="text"required name="mobile"  id="mobile" />
          </div>
          
          <button type="submit"  name="submit" value="Register"  class="button button-block"/>Get Started</button>
          
          </form>

        </div>
	
    <div id="login">   
          <h1>Welcome Back!</h1>
          
        
<form action="" method="post" name="login" onSubmit="return(validate2019());">
          
           <div class="field-wrap">
            <label>
              Username
            </label>
            <input type="text"  name="username"  id="email"/>
           </div>
          
          <div class="field-wrap">
            <label>
              Password
            </label>
            <input type="password"required  name="password" id="password"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <input type="submit" value="Login" name="submitlogin" class="button button-block"/> 
          
          </form>

        </div>
       
      </div> 
      
 
</div> <!-- /form -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="js/index.js"></script>
 
</body>
</html>
