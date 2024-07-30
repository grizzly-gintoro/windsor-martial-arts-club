<!DOCTYPE html>
<html>
    <head>
        <title>WMAC | Home Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./reset.css">
        <link rel="stylesheet" href="./styles.css">
    </head>
    <body>
        <form action="login-script.php" method="post">
            <h2>Log-in</h2>

            <?php if(isset($_GET['error'])) { ?>
                <p class="error"> <?php echo $_GET['error']; ?></p>
            <?php } ?>

            <label>Username</label>
                <input type="text" name="username" placeholder="Username">
            <label>Password</label>
                <input type="password" name="password" placeholder="Password">
            
            <button type="submit">Login</button>
        </form>
    </body>
</html>