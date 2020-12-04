<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <style type="text/css">
        * {
            padding: 0px;
            margin: 0px;
        }

        .navbar {
            overflow: hidden;
            background-color: #e9e9e9;
        }

        .navbar a {
            width: 15%;
            display: inline-block;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        .navbar a:active {
            background-color: #5f9ea0;
            color: white;
        }

        .navbar p {
            float: right;
            display: block;
            color: black;
            text-align: center;
            text-decoration: none;
            font-size: 17px;
        }

        .navbar input[type=text] {
            float: right;
            padding: 6px;
            border: none;
            margin-top: 8px;
            margin-right: 16px;
            font-size: 17px;
        }

        @media screen and (max-width: 600px) {

            .navbar a,
            .navbar input[type=text] {
                float: none;
                display: block;
                text-align: left;
                width: 100%;
                margin: 0;
                padding: 14px;
            }

            .navbar input[type=text] {
                border: 1px solid #ccc;
            }
        }
    </style>
</head>

<body>
    <div class="navbar">
        <a href="index.php">Home</a>
        <a href="send_message.php">Send Message</a>
        <a href="inbox.php">Inbox</a>
        <a href="user_list.php">User List</a>
        <a href="index.php?logout='1" style="color: red;">Logout</a>
    </div>
</body>

</html>