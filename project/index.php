<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>student login</title>
    
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
        <script src="js/prefixfree.min.js"></script>

    
  </head>

  <body>

    <div class="wrapper">
		<form class="login" action="check.php" method="POST">
				<p class="title">Log in</p>
					<input type="text" placeholder="id" name="id" />
						<i class="fa fa-user"></i>
					<input type="password" placeholder="Password" name="password"/>
						<i class="fa fa-key"></i>
						<a href="#">Forgot your password?</a>
				</p>
						<input type="submit" class="login login-submit" value="login" name='submit' />
						
				
		</form>
			
	</div>


    
    
    
  </body>
</html>
