<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Authenticate</title>
</head>
<body>
    <div class="both">
        <div class="signup">
            <h1>signup</h1>
            <form method="post" action="signup.php">
                <label for="mail">Email
                    <input type="text" placeholder="Email" name="email" required="">
                </label>
                <label for="Password">Password
                    <input type="password" placeholder="Password" name="password" required="">
                </label>
                <input type="submit" value="Signup" name="submit">
            </form>
        </div>
        <div class="login">
            <h1>login</h1>
            <form action="login.php" method="post"> <label for="mail">Email
                <input type="text" placeholder="Email" name="loginmail" required="">
            </label>
            <label for="Password">Password
                <input type="password" placeholder="Password" name="loginpassword" required="">
            </label>
            <input type="submit" value="Login" name="loginsubmit">
        </div>
    </form> 
    </div>
</body>
</html>