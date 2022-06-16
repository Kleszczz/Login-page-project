<?php 
	include_once 'header.php';
?>

<div class="signup">
	<section>
		<form action="../includes/signup.inc.php" method="POST">

			<h1>No account yet? :o</h1>

        	<label for="username">Username:</label>
				<input type="text" name="username" id="username" placeholder="type username" style="width:150px; height:15px;">
					<br>
					
			<label for="user-pw">User-Email:</label>
				<input type="text" name="Email" id="user-email" size=20 placeholder="type email" style="width:150px; height:15px; margin-right:10px">
					<br>

			<label for="user-pw">Password:</label>
				<input type="password" name="userpw1" id="user-password1" size=20 placeholder="type password" style="width:150px; height:15px; margin-left:4px">
					<br>

			<label for="user-pw">Password:</label>
				<input type="password" name="userpw2" id="user-password2" size=20 placeholder="type password" style="width:150px; height:15px; margin-left:4px">
					<br>

			<button type="submit" name="button" style="width:252px; height:50px; margin-top:1%; font-weight:600; font-size:90%">Sign up</button>

		</form>

		<?php
		if(isset($_GET["error"]))
		{
			if($_GET["error"] == "EmptyInput")
			{
				echo "<p>Fill in all fields! -.-</p>";
			}

			if($_GET["error"] == "InvalidUsername")
			{
				echo "<p>Choose a different Username!</p>";
			}

			if($_GET["error"] == "InvalidEmail")
			{
				echo "<p>Choose a proper Email!</p>";
			}

			if($_GET["error"] == "PasswordNotMatch")
			{
				echo "<p>Passwords doesn't match *.*</p>";
			}

			if($_GET["error"] == "smtmfailed")
			{
				echo "<p>Something get wrong ;/ try again, sorry</p>";
			}

			if($_GET["error"] == "UsernameTaken")
			{
				echo "<p>Choose a different Username, your username is already taken</p>";
			}

			if($_GET["error"] == "none")
			{
				echo "<p>You have signed up correctly</p>";
			}
		}
	?>

	</section>
</div>

</div>

		<?php 
		 include_once 'footer.php';
		?>