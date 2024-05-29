<form action="../redirect.php" method="POST">
<div class='register'>
	<div class='logreg-text'>Register</div>

	<?php if (isset($_GET['error'])) echo "<div class='error'>Password don't match.</div>" ?>
	<input class='input-form' type='text' name='full_name' placeholder='Full Name' value='<?php echo $_GET['full_name'] ?? ''; ?>' required>
	<input class='input-form' type='username' name='username' placeholder='Username' value='<?php echo $_GET['username'] ?? ''; ?>' required>
	<input class='input-form' type='email' name='email' placeholder='Email' value='<?php echo $_GET['email'] ?? ''; ?>' required>
	<input class='input-form' type='password' name='password' placeholder='Password' required>
	<input class='input-form' type='password' name='cpassword' placeholder='Confirm Password' required>

	<input type='hidden' name='type' value='register'>
	<button class='logreg-button'>Sign up</button>
	<div class='toreg'>Have account?<span onclick="window.location.href ='registration.php'"> Log in.</span></div>
</div>
</form>
