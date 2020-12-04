<?php include('server.php'); ?>
<?php include('navbar.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Messages</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <form method="post" action="send_message.php">
        <table><br>
            <tbody><br>
                <th>Time Sent</th>
                <th>Sender</th>
                <th>Message</th>
                <th>Reply</th>
                <?php
                $uName = $_SESSION['uName'];
                $sql = "SELECT * FROM mailbox WHERE recipient = '$uName' ORDER BY id DESC";
                $query = mysqli_query($message_db, $sql);

                if (mysqli_num_rows($query) > 0) {
                    while ($row = mysqli_fetch_array($query)) {
                        echo '<tr>
                                <td>' . $row['timestamp']. '</td>
                                <td>' . $row['sender'] . ' </td>
                                <td>' . $row['message'] . '</td>
                                <td> <button type="submit" name="send_reply" class="btn">Reply</button> </td>
                            </tr>';
                    }
                }
                ?><br>
            </tbody>
        </table>
    </form>
</body>

</html>