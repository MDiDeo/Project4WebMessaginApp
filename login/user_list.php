<?php include('server.php'); ?>
<?php include('navbar.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <title>User List</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="header">
        <h2>User List</h2>
    </div>
    <form method="post" action="user_list.php">
        <table>
            <tbody>
                <th>Username</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Role</th>
                <?php
                $userlist = mysqli_query($db, "SELECT uName, firstName, lastName, role FROM users");

                if (mysqli_num_rows($userlist) > 0) {
                    while ($row = mysqli_fetch_array($userlist)) {
                        echo '<tr>
                            <td>' . $row['uName'] . '</td>
                            <td>' . $row['firstName'] . ' </td>
                            <td>' . $row['lastName'] . '</td>
                            <td>' . $row['role'] . '</td>
                        </tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </form>
</body>

</html>