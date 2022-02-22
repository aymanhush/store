<!DOCTYPE html>
<html lang="en">
<head>
	<title>LOGIN</title>
      <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Final-Project-WebDesign-main/login.css">
    <title>Feedback</title>
</head>
<body>
      <div class="navbar">
        
                 <a href="home.php"><img src="Final-Project-WebDesign-main/logo-black.png" class="logo"></a>
                    
             </div>
    <div class="container">
     <form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
          <a href="signup.php" >Create an account</a>
     </form>
    </div>
</body>
</html>