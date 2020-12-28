<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="bootstrap.min.css" type="text/css" />
    <title>Code serialize</title>
</head>
<?php
session_start();
$serializeUser = $_SESSION['user'];
// echo $serializeUser.'<br>';
// $deserializeUser = unserialize($serializeUser);
// echo var_dump($deserializeUser);
?>

<body>
    <div class="container">
        <label>Base64 of User: </label> <br>
        <input type="text" class="form-control" value="<?php echo base64_encode($serializeUser); ?>">
        <br><a class="btn btn-primary" href="http://localhost/challenge11/deserialize.php">Decode</a>
    </div>
</body>