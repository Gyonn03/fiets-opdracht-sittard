
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link ref="stylesheet" href=" assets/styles.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <style>
        body{ font: 14px sans-serif; 
        	background: linear-gradient(to right, #ff8ab3 7% ,#0066eb 100% );
            width: 350px;
            
            box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.3);
            margin: 90px auto; 
        }
        .wrapper{ width: 360px; padding: 20px;background-color:white; }
        
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>

        <?php 
        if (!empty($login_err)) {
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <!-- <p>Don't have an account? <a href="register.php">Sign up now</a>.</p> -->
            <p>Ga naar de <a href="../vragenlijst.php">vragenlijst</a>.</p>
        </form>
    </div>
</body>
</html>