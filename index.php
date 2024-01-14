
<?php
session_start();

$adminUsername = "admin";
$adminPassword = "admin";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === $adminUsername && $password === $adminPassword) {
        $_SESSION["username"] = $username;
        header("Location: Nima Studio.html");
        exit;
    } else {
        $errorMessage = "<font class='font'>The username or password is incorrect.</font>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="Style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Image/Logo1.png" rel="icon" type="Image/png" sizes="80x80">
    <title>Login</title>
</head>
<body bgcolor="#94A684">
<center>
    <a href="Index.php" style="text-decoration:none;"><h1 align="center" class="font"><font size="+6"><img src="Image/Logo2.png" width="70" height="45">Nima Studio</font></h1></a>
    <h2 align="center" class="font"><font>Nima customer and order management software is your constant companion</font></h2>
    <hr color="#272829">
    <h1 class="font">Login</h1>
    <?php if (isset($errorMessage)) : ?>
        <p class="error-message"><?php echo $errorMessage; ?></p>
    <?php endif; ?>
    <form method="post">
        <label for="User" class="font">Username</label> <br> <input id="User" type="text" name="username" class="pun3" required>
        <br><br>
        <label for="Pass" class="font">Password</label> <br> <input id="Pass" type="text" name="password" class="pun3" required>
        <br><br>
        <input type="submit" name="insert" value="Login" class="pun2">
    </form>
</center>
</body>
</html>
