
<html>
<body>

<h1>Registration Form</h1>

<form action="" method="POST">

Username: <input type="text" name="username"><br><br>

Email: <input type="email" name="email"><br><br>

Password: <input type="password" name="pass"><br><br>

Confirm Password: <input type="password" name="cpass"><br><br>

<input type="submit" name="register" value="Register">

</form>

<?php

if (isset($_POST['register']))
{
    if (empty($_POST['username']) ||
        empty($_POST['email']) ||
        empty($_POST['pass']) ||
        empty($_POST['cpass']))
    {
        echo "Please fill all required fields!";
    }
    elseif ($_POST['pass'] != $_POST['cpass'])
    {
        echo "Password and confirm password should match";
    }
    else
    {
        echo "Successful";
    }
}

?>

</body>
</html>
