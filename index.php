<?php include("header.php"); ?>
		
	<body>
		<h1>Let's Have Fun With Math!</h1>
		
		<form action="index.php" method="post">
			<table>
				<tr>
					<th>Email:<th> 
					<td>
						<input type="text" id="email" name="email" />
					</td>
				</tr>
				
				<tr>
					<th>Password:<th> 
					<td>
						<input type="password" id="pwd" name="password" />
					</td>
				</tr>
				
				<tr>
					<td>
						<input id="submit" name="submit" type="submit" value="Log In"/>
					</td>
				</tr>
			</table>
		</form>
	
		<?php
            //Email's regular expression
            $rexpEmail = "/^[a-zA-Z]+@[a-zA-Z]+\.[a-zA-Z]{1,3}$/";
        
            //Password's regular expression
            $rexpPass = "/^aaa$/";
			
			if (!empty($_POST["email"]) && preg_match($rexpEmail, $_POST["email"])) {
                if (!empty($_POST["password"]) 
                  && preg_match($rexpPass, $_POST["password"])) {
                    header("Location: mathGame.php");
                } else {
                    echo "<p>Invalid Login. Try again.</p>";
                }
			} else {
                echo "<p>Invalid Login. Try again.</p>";
            }

		?>

		
<?php include("footer.php"); ?>