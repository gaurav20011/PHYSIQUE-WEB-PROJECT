

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="p-3 m-0 border-0 bd-example" style="background-image: url(img/bg/skills.jpg);background-size: cover;">

    <!-- Example Code -->
    
    <div class="card" style="width:500px;margin-left: 600px;margin-top: 250px;background-color: #ffffffcf;height: 300px">
      <div class="card-body">
    <form action="repassword_process.php" method="post">
	<center><div class="form sign-in">
			  <h1><center> <b><span class="multicolortext"></span></center></b></h1>
			 
			   <h2><center></center></h2>
			  <label>
				<span><p style="padding:10px;border=2px solid red;color: black;">Enter new password</p></span>
				<input type="Password" name="password">
			  </label><br>
			  <label>
				<span><p style="padding:10px;border=2px solid red;color: black;">Retype Password</p></span>
				<input type="Password" name="cpassword">
			  </label><br>
			  <br>
			  <label>
			  <button class="submit" type="submit" style="background-color:green;">Submit</button>

			  <button type="reset" class="reset" style="background-color:red" >Reset </button>
			  </label>
			  

			 
			</div></center>
		</form>
			</div></center>
		</form>
      </div>
    </div>
    
    <!-- End Example Code -->
  </body>
</html>