<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>cntact form project</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>

		<div class="main">
			<form action="<?php echo $_SERVER ['PHP_SELF'];?>" method="POST">

				<div class="single-form">
					<label>Full Name</label>
					<input type="text" name="fullname" placeholder="Enter Your Full Name" value="<?php if (isset($fullname)) echo $fullname; ?>">

					<span>
						
						<?php

						if(isset($error['fullname'])){
							echo $error['fullname'];
						 }

						?>

					</span>
					
				</div>
				<div class="single-form">
					<label>Last Name</label>
					<input type="text" name="lastname" placeholder="Enter Your Last Name" value="<?php if(isset($lastname)) echo $lastname; ?>">

					<span>
						
						<?php 

						if(isset($error['lastname'])) {
							echo $error['lastname'];
						 }
						?>

					</span>

					
				</div>


				<div class="single-form">
					<label>Subject</label>
					<input type="text" name="subject" placeholder="Enter Your Full subject" value="<?php if (isset($subject)) echo $subject; ?>">

					<span>
						
						<?php 

						if(isset($error['subject'])){
							echo $error['subject'];
						}

						?>
						
					</span>			
				</div>

				<div class="single-form">
					<label>Email</label>
					<input type="email" name="email" placeholder="Enter Your Full Email" value="<?php if(isset($email)) $email ;?>">

					<span>
						
						<?php if(isset($error['email'])){

							echo $error['email'];
						}
						 ?>
						
					</span>			
				</div>

				<div class="single-form">
					<label>Message</label>
					<textarea name="message" placeholder="Write your message" 

					value="<?php if(isset($message))$message;?>">
						
					</textarea>

					<span>
						
						<?php if(isset($error['message'])){
							echo $error['message'];
						} ?>
						
					</span>			
				</div>

				<div class="single-form">
					
					<input type="submit" name="btn" value="send message">

	
				</div>
			</form>

			<?php 

			if(isset($_POST['btn'])){
				$fullname =$_POST['fullname'];
				$lastname = $_POST['lastname'];
				$subject = $_POST['subject'];
				$email = $_POST['email'];
				$message = $_POST['message'];

				//ERRO Ceaking
				$error =[];

				if(empty($_POST['fullname'])){
					$error['fullname'] ='Insert your Full name';
				}
				if(empty($_POST['lastname'])){
					$error['lastname'] ='Insert your Lastname';
				}
				if(empty($_POST['subject'])){
					$error['subject']='FILL subject BOX';
				}
				if(empty($_POST['email'])){
					$error['email']='Please give current Email';
				}
				if(empty($_POST['message'])){
					$error['message']='Fill the Message BOX';
				}
				//mail

				$to ='infoatikmasud@gmail.com';
				$form='form'.$email;
				$subject1='subject'.$subject;
				$body ="Name: ".$fullname ."\n subject : ". $subject ."\n Email :". $email ."\n Message :".$message;

				$check = mail($to,$form,$body);
				if($check == true){
					echo'<p style="color;grean;"> send sucessfully </p>';
				}else{

				echo '<p style="color: red;">Not send!</p>';
				}
			}

			?>
			
		</div>



	</body>
</html>