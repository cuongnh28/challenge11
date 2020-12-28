<?php
require 'User.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Code deserialize</title>
    <link rel="stylesheet" href="bootstrap.min.css" type="text/css" />
</head>

<body>
    <?php
    if (isset($_POST['submit'])) {
        $base64 = $_POST['base64'];
        $serializeUser = base64_decode($base64);
        $deserializeUser = unserialize($serializeUser);
        $username = $deserializeUser->getUsername();
        $email = $deserializeUser->getEmail();
        $yearOfBirth = $deserializeUser->getYearOfBirth();
        $sex = $deserializeUser->getSex();
        // echo $deserializeUser->toString();
    ?>
        <div class="container">
            <h1 style="text-align: center">Student info after deserialize</h1>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Year Of Birth</th>
                        <th scope="col">Sex</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $username; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $yearOfBirth; ?></td>
                        <td><?php echo $sex; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    <?php
    } else {
    ?>
        <div class="container">
            <form action="" method="post" name="submit_form">
                <div class="form-group">
                    <label>Enter base64 code:</label>
                    <input type="text" name="base64" class="form-control" placeholder="Enter base64" required>
                </div>
                <br><button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>
    <?php } ?>

</html>