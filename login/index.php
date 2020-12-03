<?php include('server.php'); ?>
<?php include('navbar.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="header">
        <h2>Home Menu</h2>
    </div>

    <div class="content">
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="error success">
                <h3>
                    <?php
                    echo $_SESSION['success'];
                    echo $_SESSION['role'];
                    unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>

        <?php if (isset($_SESSION["uName"])) : ?>
            <p>Welcome <strong><?php echo $_SESSION["firstName"]; echo " "; echo $_SESSION["lastName"]; ?></strong></p>
            <p><a href="index.php?logout='1" style="color: red;">Logout</a></p>
        <?php endif ?>
    </div>
</body>

</html>