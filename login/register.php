<?php include('server.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Register User</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="header">
        <h2>Register</h2>
    </div>

    <form method="post" action="register.php">
        <?php include('errors.php') ?>
        <div class="input-group">
            <label>First Name:</label>
            <input type="text" name="firstName" value="<?php echo $firstName; ?>" required>
        </div>
        <div class="input-group">
            <label>Last Name:</label>
            <input type="text" name="lastName" value="<?php echo $lastName; ?>" required>
        </div>
        <div class="input-group">
            <label>Username:</label>
            <input type="text" name="uName" value="<?php echo $uName; ?>" required>
        </div>
        <div class="input-group">
            <label>Email Address:</label>
            <input type="text" name="email" value="<?php echo $email; ?>" required>
        </div>
        <div class="input-group">
            <label>Password:</label>
            <input type="password" name="pass1" required>
        </div>
        <div class="input-group">
            <label>Confirm Password:</label>
            <input type="password" name="pass2" required>
        </div>

        <label>I am a:</label><br>
        <input type="radio" name="role" <?php if (isset($role) && $role == "teacher") echo "checked"; ?> value="teacher" required>Teacher<br>
        <input type="radio" name="role" <?php if (isset($role) && $role == "student") echo "checked"; ?> value="student" required>Student<br>

        <div class="input-group">
            <button type="submit" name="register" class="btn">Register</button>
        </div>
        <p>
            Already a member? <a href="login.php">Sign in</a>
        </p>
    </form>
</body>

</html>