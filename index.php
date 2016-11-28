<?php include("header.php"); ?>
		
	<body>
		<h1>Let's Have Fun With Math!</h1>
		
		<form action="mathGame.php" method="post">
			<table>
				<tr>
					<th>Email:<th> 
					<td>
						<input id="email" name="email" type="text" required />
					</td>
				</tr>
				
				<tr>
					<th>Password:<th> 
					<td>
						<input id="pwd" name="password" type="password" required />
					</td>
				</tr>
				
				<tr>
					<td>
						<input id="submit" name="submit" type="submit" value="Log In"/>
					</td>
				</tr>
			</table>
		</form>
		
		<div id="tester">
			<?php
				$email = $_POST["email"];
				$pwd = $_POST["password"];
			
				if(isset($email)) {
					echo $email;
				}
			?>
		</div>
		
<?php include("footer.php"); ?>