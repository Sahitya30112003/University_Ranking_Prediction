<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = sprintf("SELECT * FROM user
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
    
    if ($user) {
        
        if (password_verify($_POST["password"], $user["password_hash"])) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["user_id"] = $user["id"];
            
            header("Location: action_page.html");
            exit;
        }
            $is_invalid = true;
      }
           
     else
	{
	echo '<script>alert("Please enter email and password") </script>';
	}
}
?>
<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 13px;
  margin: 5px 10px 25px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

span.psw {
  float: right;
  padding-top: 10px;
}

.backbtn2 {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}
/* Float cancel and signup buttons and add an equal width */
.backbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 5px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 60%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
@viewport {
width: auto;
}

.form__text {
    text-align: center;
}

.form__link {
    color: var(--color-secondary);
    text-decoration: none;
    cursor: pointer;
}

.form__link:hover {
    text-decoration: underline;
}
</style>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body
{
	background: url("page.jpg") no-repeat center center fixed;
    background-size: cover;
 overflow: hidden; /* Hide scrollbars */
}

</style>
</head>
<body>
<form class="modal-content" method="post" id="signup" novalidate>
    <div class="container">
    <h2>Login</h2>
    <p>Please fill in this form to login.</p>
    <?php if ($is_invalid): ?>
        <em>Invalid login</em>
    <?php endif; ?>
    <hr>
      <label for="uname"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" id="email" required >
      <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" id="password"  required>
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
       <button type="button" value="Back" onclick="window.history.back().style.display='none'"  class="backbtn2">Back</button>
      <p class="form__text">
                <a class="form__link" href="signup.html" id="linkSignup">Don't have an account?Sign Up</a>
      </p>
    </div>
  </form>
</body>