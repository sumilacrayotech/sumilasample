<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Login Page </title>
    <style>
        Body {
            font-family: Calibri, Helvetica, sans-serif;
            background-color: pink;
        }
        button {
            background-color: #4CAF50;
            width: 100%;
            color: orange;
            padding: 15px;
            margin: 10px 0px;
            border: none;
            cursor: pointer;
        }
        form {
            border: 3px solid #f1f1f1;
            width:50%;
        }
        input[type=text], input[type=password] {
            width: 100%;
            margin: 8px 0;
            padding: 12px 20px;
            display: inline-block;
            border: 2px solid green;
            box-sizing: border-box;
        }
        button:hover {
            opacity: 0.7;
        }
        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            margin: 10px 5px;
        }


        .container {
            padding: 25px;
            background-color: lightblue;
            width:100%;
            align:center;
        }
    </style>
</head>
<body>
<center> <h1> Admin Login Form </h1> </center>
<center>
<form action="loginprocess.php" method="post" >
    <div class="container">
	<?php
	error_reporting(0);
	session_start();
	if ($_SESSION['in']!=''){
	if ($_SESSION['in']==1){
		echo "<font color=red>Invalid Username or Password</font><br>";
	}
	unset($_SESSION['in']);
	}
	
	?>
        <label>Username : </label>
        <input type="text" placeholder="Enter Username" name="username" required minlength=8>
        <label>Password : </label>
        <input type="password" placeholder="Enter Password" name="password" required minlength=8>
        <button type="submit">Login</button>
        <!--<input type="checkbox" checked="checked"> Remember me
        <button type="button" class="cancelbtn"> Cancel</button>
        Forgot <a href="#"> password? </a>-->
    </div>
</form>
</center>
</body>
</html>