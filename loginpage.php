<!DOCTYPE html>
<html>
<head>
    <title>HTML Forms</title>
    <!-- <link rel="stylesheet" href="signup.css"> -->
    <style type="text/css">
	    body {
	    	background-color: lightblue;
	    	font: 1em Helvetica;
	    }
	    body {
		background-color: #cfcbbf;
		background-image: url(/images/bg4_2.png);
}

#SignupContent {

		max-width: 600px;
		backgroud-color: white;
		border-radius: 4px;
}
[type=text]{
	display: block;
	margin: 0 auto;
	width: 80%;
	border: 0;
	border-bottom: 1px solid rgba(0,0,0,.2);
	height:45px;
	line-height: 40px;
	margin-bottom: 10px;
	font-size: 1em;
	color:rgba(0,0,0,.4);

}

@media screen and (max-width: 600px) {
		#SignupContent {
				height: 100%;
		}
	#materialToolbar {
		    padding: 10px;
	}
}
.signup{
	float: center;
}
.clearfix{
	float:center;
}
	    button {
	      background-color: #4CAF50;
	      color: white;
	      padding: 8px 20px;
	      margin: 15px 0;
	      width: 80%;
	      position: static;
    </style>
</head>
<body>
    <h2>Signup Main Page</h2>
    <div class='container' align='center'>
    <form action="action.php" method = "POST">
		 <input type="text" name="uname" placeholder="E-mail"><br><br>
		 <input type="text" name="upass" placeholder="Password" class="password"><br><br>
	s
		</div>
		<div class="clearfix">
			  <button type="submit" class="signupbtn">Sign Up</button>
		      <button type="button"  class="cancelbtn">Cancel</button>
		      <button type="button"  class="loginbtn">login</button>

		      
		</div>    
    </form>
</body>
</html>