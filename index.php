<?php
require 'User.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Code serialize</title>
    <link rel="stylesheet" href="bootstrap.min.css" type="text/css" />
</head>

<body>
    <?php
    session_start();
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $yearOfBirth = $_POST['yearOfBirth'];
        $sex = $_POST['sex'];
        $user = new User();
        $user->setUsername($username);
        $user->setEmail($email);
        $user->setYearOfBirth($yearOfBirth);
        $user->setSex($sex);
        $_SESSION['user'] = serialize($user);
        // echo $_SESSION['user'];
        // echo $user->toString();
        // echo var_dump($user)."<br>";
        // $s = serialize($user);
        // echo $s;
        header("Location:serialize.php");
    } else {
    ?>
        <div class="container">
            <form action="" method="post" name="submit_form">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Enter username" required>
                </div>
                <div class="form-group">
                    <label>Email address</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter email" required>
                </div>
                <div class="form-group">
                    <label>Year of birth</label>
                    <input type="text" name="yearOfBirth" class="form-control" placeholder="Year of birth" required>
                </div>
                <div class="form-group">
                    <label for="sex">Sex</label>
                    <select name="sex" class="form-control">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="unknow">Unknow</option>
                    </select>
                </div>
                <br><button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    <?php } ?>
</body>

</html>