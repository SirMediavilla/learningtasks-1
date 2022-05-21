<!DOCTYPE html>
<html lang="en">

	<head>
	    <title>Home</title>
	    <link rel="stylesheet" type="text/css" href="pstyle.css"/>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale+1.0">
	</head>
	
	<style>
			body
			{
				background-image: url(images/w.jpg);
				background-repeat: no-repeat;
				background-size: cover;
				text-align: center;
			}

			.about 
			{
			  width: 500px;
			  padding: 10px;
			  margin: 0;
			}
			
			.d
			{
				font-family: 'Nanum Gothic Coding',monospace;
				font-size: 25px;
			}
			
			table 
			{
			  border-spacing: 30px;
			}
			
			class_name{border-style: none;}
	</style>
	
	<body>
	
		<?php include 'Navbar.php' ?>
		<div class="controler">
			
			<center>
				<h1 style="font-size:50px;">About Me</h1>
				<h3>Heres some things you should know!</h3>

				<hr style="height:2px; width:100%; border-width:0; color:red; background-color:black">
				
				<p>&nbsp;
				<table align=center style="margin:15;padding:15";>
				<tr>
				
					<th>
					<div class="image-left">
						<img src="images/profile.jpg" height="570" width="428" title="Egg" alt="Egg"/>
					</div>
					</th>
					
					<th>
						<hr size="60" width="60" color="white">
					</th>
					
					<th>
						<div class="about">
						<p class="d">
						My name is Sir Emmanuel Lee E. Mediavilla. I am a Filipino freelance 
						programmer that specializes in the design and implementation of websites 
						for various purposes. I graduated from The University of St. La Salle with 
						a course in Information Technology and have pursued different career opportunities 
						that granted me diversity in creating my projects. Some examples of companies I've 
						worked at are Indev Design and Web Authors+.
						</p>
					</div>
					
					</th>
				</tr>
				</table>
					
				<footer>
					<div class=footer>
						<center>
							<p>&nbsp;
							<p>&nbsp;
							<hr style="height:2px; width:100%; border-width:0; color:red; background-color:black">
							
							<p class="credit">&copy; Copyright Sir Mediavilla 2022<br></p>
							<p>All Rights Reserved</p>
						</center>
					</div>
				</footer>
			</center>
		</div>
	</body>
</html>