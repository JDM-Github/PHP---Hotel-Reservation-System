<form action="../redirect.php" method="POST">
<div class='login'>
	<div class='logreg-text'>Login</div>

	<?php if (isset($_GET['error'])) echo "<div class='error'>Invalid Username of Account</div>" ?>
	<input class='input-form' type='text' name='email' placeholder='Email / Username' required>
	<input class='input-form' type='password' name='pass' placeholder='Password' required>
	<input type='hidden' name='type' value='login'>

	<button type="submit" class='logreg-button'>Login</button>
	<div class='toreg'>Don't have account?<span onclick="window.location.href = 'registration.php?on=reg'"> Sign in.</span></div>
</div>
</form>

