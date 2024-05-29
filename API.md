# API Documentation

This is api documentation of our Hotel Reservation System (Fix this)

## Login API (POST)
```php
if ($type === 'login')
{
	$username = $_POST["email"];
	$password = $_POST["pass"];
	if ($username === 'admin' && $password === 'admin')
		redirect_to('./admin/admin.php');
	if (login($username, $password))
		redirect_to('./index.php');
	redirect_to('./registration.php?error=true');
}
```

### Request
```json
{
	"email": "UserEmail",
	"pass" : "HashedPassword"
}
```

### Response
The response depends on the user's role and authentication status:

**Success Response for Admin:**
- **Code:** 302 Found
- **Headers:** `Location: /admin/admin.php`
- **Content:** Redirects the user to the admin dashboard.

**Success Response for Regular User:**
- **Code:** 302 Found
- **Headers:** `Location: /index.php`
- **Content:** Redirects the user to the index page.

**Error Response:**
- **Code:** 302 Found
- **Headers:** `Location: /registration.php?error=true`
- **Content:** Redirects the user to the registration page with an error flag.

---

## Register API (POST)
```php
elseif ($type === 'register')
{
	$full_name = $_POST["full_name"];
	$username  = $_POST["username"];
	$email     = $_POST["email"];
	$password  = $_POST["password"];
	$cpassword = $_POST["cpassword"];

	if ($password !== $cpassword)
		redirect_to("./registration.php?on=reg&full_name=$full_name&username=$username&email=$email&error=true");

	$pass = password_hash($password, PASSWORD_DEFAULT);
	register($full_name, $username, $email, $pass);
	if (login($username, $password))
		redirect_to('./index.php');

	redirect_to('./registration.php?on=reg');
}
```

### Request
```json
{
	"full_name": "UserFullName",
	"username": "Username",
	"email": "UserEmail",
	"password": "UserPassword",
	"cpassword": "ConfirmPassword"
}

```

### Response

**Success Response:**
- **Code:** 302 Found
- **Headers:** `Location: /index.php`
- **Content:** Redirects the user to the index page.

**Error Response:**
- **Code:** 302 Found
- **Headers:** `Location: /registration.php?error=true&full_name=$full_name&username=$username&email=$email`
- **Content:** Redirects the user to the registration page with an error flag and includes the user's entered data.

**Default Error Response:**
- **Code:** 302 Found
- **Headers:** `Location: /registration.php?on=reg`
- **Content:** Redirects the user to the registration page with an error flag.

