<?php include('server.php'); ?>
<?php include('navbar.php'); ?>
<!DOCTYPE html>
<html>
<?php if ($_SESSION['role'] == 'teacher') : ?>

    <head>
        <title> Teacher TA Landing Page </title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <div class="header">
            <h2>List of Current TAs</h2>
            <h2>List of Applicants</h2>
        </div>
    </body>
<?php endif ?>

<?php if ($_SESSION['role'] == 'student') : ?>

    <head>
        <title> Student TA Landing Page </title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <div class="header">
            <h2>List of Teachers Looking for TAs</h2>
        </div>
        <div class="header">
            <h2>TA Application</h2>
        </div>

        <div class="content">
            <?php if (isset($_SESSION['submitted'])) : ?>
                <div class="success submitted">
                    <h3>
                        <?php
                        echo $_SESSION['submitted'];
                        unset($_SESSION['submitted']);
                        ?>
                    </h3>
                </div>
            <?php endif ?>
            <form method="post" action="tas.php">
                <div class="input-group">
                    <p>Click <a href="application.php">here</a> to apply to become a TA.</p>
                </div>
            </form>

    </body>
<?php endif ?>

<?php if ($_SESSION['role'] != ('teacher' || 'student')) : ?>
    <p>Error accessing this page.</p>
<?php endif ?>

</html>