<?php 
	include_once 'header.php';
?>

    <div class="login">
 	    <section>
		    <form action="login.inc.php" method="post">

				<h1>Try to login in :)</h1>

        		<label for="username">Username:</label>
					<input type="text" name="username" id="username" placeholder="type username" style="width:150px; height:15px;">
					
					<br>

				<label for="user-pw">Password:</label>
					<input type="password" name="userpw" id="user-pw" size=20 placeholder="type password" style="width:150px; height:15px; margin-left:4px">

					<br>

				<button type="submit" name="button" style="width:252px; height:50px; margin-top:1%; font-weight:600; font-size:90%">Log in</button>

		    </form>

        <?php
		    if(isset($_GET["error"]))
		    {
		    	if($_GET["error"] == "EmptyInput")
		    	{
		    		echo "<p>Fill in all fields! -.-</p>";
		    	}

			    if($_GET["error"] == "WrongLogin")
			    {
			    	echo "<p>Try again, wrong login or password</p>";
			    }

			    if($_GET["error"] == "Success")
			    {
				    echo "<p>You have log in correctly</p>";
			    }
		    }
	    ?>

         </section>
    </div>

</div>
<?php 
    include_once 'footer.php';
?>