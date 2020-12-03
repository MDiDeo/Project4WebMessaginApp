<?php include('server.php'); ?>
<?php include('navbar.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <title>TA Application</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="header">
        <h2>Application</h2>
        <p>Fill out this application to apply to become a TA.</p>
    </div>

    <form method="post" action="application.php">
        <?php include('errors.php') ?>
        <div class="input-group">
            <label>Applicant's First Name:</label>
            <input type="text" name="sfirstName" value="<?php echo $firstName; ?>" required>
        </div>
        <div class="input-group">
            <label>Applicant's Last Name:</label>
            <input type="text" name="slastName" value="<?php echo $lastName; ?>" required>
        </div>
        <div class="input-group">
            <label>Name of Teacher you are applying to:</label>
            <input type="text" name="tName" value="<?php echo $tName; ?>" required>
        </div>

        <label>Semester you are Applying to be a TA for:</label><br>
        <input type="radio" name="semester" <?php if (isset($semester) && $semester == "fall") echo "checked"; ?> value="fall" required>Fall<br>
        <input type="radio" name="semester" <?php if (isset($semester) && $semester == "spring") echo "checked"; ?> value="spring" required>Spring<br>
        <input type="radio" name="semester" <?php if (isset($semester) && $semester == "summer") echo "checked"; ?> value="summer" required>Summer<br>

        <div class="input-group">
            <label>Year:</label>
            <input type="number" id="year" name="year" min=date(Y)>
        </div>
        <div class="input-group">
            <button type="submit" name="apply" class="btn">Apply</button>
        </div>
    </form>
</body>

</html>