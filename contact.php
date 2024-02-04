<?php require("script.php"); ?>
<?php 
	if(isset($_POST['submit'])){
		$response = sendMail($_POST['email'], $_POST['subject'], $_POST['message']);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body style="font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif font;">
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light rounded-navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">SDS</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#services">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#projects">Projects</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="info">
			Send an email to your self
		</div>

		<label>Enter your email</label>
		<input type="email" name="email" value="">
		
		<label>Enter a subject</label>
		<input type="text" name="subject" value="">
	
		<label>Enter your message</label>
		<textarea name="message"></textarea>
	
		<button type="submit" name="submit">Submit</button>
	
		<?php 
			if(@$response == "success"){
				?>
					<p class="success">Email send successfully</p>			
				<?php
			}else{
				?>
					<p class="error"><?php echo @$response; ?></p>		
				<?php
			}
		?>
	</form>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
