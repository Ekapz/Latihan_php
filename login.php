<?php
session_start();
$x = [];
$xs['email'] = "no_error";

$x['password'] = "no_error";

if(isset($_POST['email'])){
		$email = $_POST['email'];
		$password = $_POST['password'];

		
		if(trim($email)==""){
			$x['email'] = 'error_empty';
		}else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
			$x['email'] = "error_format";
		}else{
			$x['email'] = "no_error";
		}

		if (trim($passsword)=="") {
			$x['passsword'] = "password_empty";

			# code...
		}else if(strlen($password)<8){
			$x['password'] = 'password_lenght';
					
		}else if(!preg_match("/^[a-zA-z0-9]*$/",$password)){
			$x['password'] = 'password_restrict';
		}



		if($email=="mohamad.ferdiansyah17@gmail.com"){
			if($password=="test"){

				$_SESSION['isLoggedIn'] = true;
				$_SESSION['email'] = $email;
				header("location:index.php?l=success");

		}else{
			$_SESSION['isLoggedIn'] = false;
			echo "Salah password";
			}
		}else{

			$_SESSION['isLoggedIn'] = false;
			echo "salah email";
		}
	}
?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST"	action="">
		<table>
			<tr>
				<td>Email</td>
				<td><input type='text'
				name='email'></td>	
				</tr>
				<?php if($x['email']!="no_error"){?>
				
					<tr>
						<td></td>
						<td>
							<?php switch ($x['email']) {
								case 'error_empty': ?>
								<span style="color:red">
									Email Cannot be blank
								</span>
								<?php break;
								case 'error_format': ?>
								<span style="color:red">
									E-mail Format error
								</span>
								<?php break;



							}
							?>

				</td>
				</tr>
				<?php } ?>

				<tr>

					<td>password</td>
					<td><input type="password"
						name="password"></td>
					</tr>
					<?php if($x['password']!="no_error"){?>
				
					<tr>
						<td></td>
						<td>
							<?php switch ($x['password']) {
								case 'password_empty': ?>
								<span style="color:red">
									Password tidak boleh kosong
								</span>
								<?php break;
								case 'password_length': ?>
								<span style="color:red">
									panjang password tidak boleh lebih dari 9
								</span>
								<?php break;
								case 'password_restrict': ?>
								<span style="color:red">
									tidak boleh simbol
								</span>
								<?php break;




							}
							?>

				</td>
				</tr>
				<?php } ?>

				<tr>

					<tr>
						<td></td>
						<td><button type="submit">Sign In</button></td>
					</tr>
				</table>
			</form>

		</body>
		</html>