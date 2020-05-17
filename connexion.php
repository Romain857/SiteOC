<?php $error=filter_input(INPUT_GET,"error"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="connexion.css">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign In</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fas fa-code"></i></span>
					<span><i class="fab fa-github"></i></span>
					<span><i class="fab fa-gitlab"></i></span>
				</div>
			</div>
			<div class="card-body">
				<form method="post" action="verif/verifUsers.php">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" name="nom" placeholder="Name..." required>
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" name="mdp" placeholder="Password..." required>
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>
					<button type="submit" class="btn float-right login_btn">
                            Login
                    </button>	

                    <?php
            if ($error != NULL){
                ?>
                <p style="color: red">Le code est faux</p>
            <?php
            }
            ?>
				
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="#">Sign Up</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Forgot your password?</a>
				</div>
            </div>
            </form>
		</div>
	</div>
</div>
</body>
</html>