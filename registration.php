<html>
	<head>
	    <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<title>SIGN-UP</title>
		<link rel="stylesheet" href="css/signup.css">
	<head>
	<body>
		<div class="container">	
				<div class="header">
				<h1 class="homebtn" href="#landing page">AKTU ALUMNI PORTAL</h1>
				</div>
				
		
							  
							  <form class="form-horizontal" role="form" method="post" action="registration.php">
							        <h2>Registration Form</h2>
										<div class="form-group">
										  <label class="control-label col-sm-2" for="text">Name:</label>
										  <div class="col-sm-10">
											<input type="text" class="form-control" id="name" placeholder="Enter name" name="name" autofocus>
										  </div>
										</div>
										<div class="form-group">
										  <label class="control-label col-sm-2" for="text">College:</label>
										  <div class="col-sm-10">
											<input type="text" class="form-control" id="college" placeholder="Enter college" name="college" autofocus>
										  </div>
										</div>
										<div class="form-group">
										  <label class="control-label col-sm-2" for="text">Course:</label>
										  <div class="col-sm-10">
											<input type="text" class="form-control" id="course" placeholder="Enter course" name="course" autofocus>
										  </div>
										</div>
										<div class="form-group">
										  <label class="control-label col-sm-2" for="text">Session:</label>
										  <div class="col-sm-10">
											<input type="text" class="form-control" id="session" placeholder="Enter Session (Eg 2012- 2016)" name="session" autofocus>
										  </div>
										</div>
										<div class="form-group">
										  <label class="control-label col-sm-2" for="text">Roll No:</label>
										  <div class="col-sm-10">
											<input type="text" class="form-control" id="rollno" placeholder="For verification" name="roll" autofocus>
										  </div>
										</div>
										<div class="form-group">
										  <label class="control-label col-sm-2" for="tel">Contact No:</label>
										  <div class="col-sm-10">
											<input type="tel" class="form-control" id="contact" placeholder="Enter contact no" name="contact" autofocus>
										  </div>
										</div>
										<div class="form-group">
											  <label class="control-label col-sm-2" for="email">Email:</label>
											  <div class="col-sm-10">
												<input type="email" class="form-control" id="email" placeholder="Enter email" name="email" autofocus>
											  </div>
											</div>
										<div class="form-group">
										  <label class="control-label col-sm-2" for="pwd">Password:</label>
										  <div class="col-sm-10">          
											<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pass" autofocus>
										  </div>
										  
								</div>
									<div class="form-group">        
									  <div class="col-sm-offset-2 col-sm-10">
										<button type="submit" class="btn btn-info" name="submit" value="submit" >Submit</button>
									 </div>
								</div>
								  
							 </form>
       </div>
  </div>
		
			<script src="js/bootstrap.min.js"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>	
		
	</body>
</html>	


<?php  
  
include("database/db_conection.php");//make connection here  
if(isset($_POST['submit']))  
{  
    $user_name=$_POST['name'];    //here getting result from the post array after submitting the form.  
    $user_college=$_POST['college'];  
    $user_course=$_POST['course'];
	$user_session=$_POST['session'];
	$user_roll=$_POST['roll'];
	$user_contact=$_POST['contact'];
	$user_email=$_POST['email'];
	$user_pass=$_POST['pass'];
  
  
    if($user_name=='')  
    {  
        
        echo"<script>alert('Please enter the name')</script>";  
exit();  
    }  
  
    if($user_pass=='')  
    {  
        echo"<script>alert('Please enter the password')</script>";  
exit();  
    }  
  
    if($user_email=='')  
    {  
        echo"<script>alert('Please enter the email')</script>";  
    exit();  
    }  
//here query check weather if user already registered so can't register again.  
    $check_email_query="select * from users WHERE user_email='$user_email'";  
    $run_query=mysqli_query($dbcon,$check_email_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";  
exit();  
    }  
//insert the user into the database.  
    $insert_user="insert into users (user_name,user_pass,user_email) VALUE ('$user_name','$user_pass','$user_email')";  
    if(mysqli_query($dbcon,$insert_user))  
    {  
        echo"<script>window.open('welcome.php','_self')</script>";  
    }  
  
  
  
}  
  
?>  
			