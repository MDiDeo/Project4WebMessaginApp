<?php include('server.php'); ?>
<?php include('navbar.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Send Message:</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <form method="post" action="send_message.php">
        <?php include('errors.php') ?>
        <p>Please refer to the <a href="user_list.php">User List</a> to find a username to enter into the recipient field.</p>
        <div class='input-group'>
            <label>To:</label>
            <input type="text" name="recipient" value="<?php echo $recipient; ?>" required>
        </div>

        <div class='input-group'>
            <label>Message:</label>
            <textarea id="message" name="message" cols=98 rows=20></textarea>
        </div>
        <div class="input-group">
            <button type="submit" name="send_message" class="btn">Send Message</button>
        </div>
    </form>
</body>

</html>