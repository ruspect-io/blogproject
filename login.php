<?php
require "db.php";
?>

<?php if ( isset($_SESSION['logged_user'])) :  ?>
    autorized <br>
    Hello, <?php echo $_SESSION['logged_user']  -> login; ?>!
    <hr>
    <a href="/logout.php"> logout </a>
<!-- <a href="signup.php"> Registration </a><br> -->
<?php else : ?>    
<html lang='eng'>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link  href="css/style.css" rel="stylesheet">
    </head>

    <body class="text-center">
        <header id="signInHeader">
            <form class="form-signin" action="login.php" method="POST">
                <a href="http://chatfeed.home/">
                <img class="mb-2" src="images/Livechat_logo-750x410.jpg" alt="" width="288" height="144">
                </a>
                <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>

                <label for="inputLogin" class="sr-only">Login</label>
                <input type="login" id="inputEmail" name="login" class="form-control"  value="<?php echo @$data['login']; ?>" placeholder="Your login" required autofocus>

                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" id="inputPassword" name="password" class="form-control" value="<?php echo @$data['password'];?>" placeholder="Password" required>
                
                <div class="checkbox mb-3">
                </div class="signinButton">
                <!-- <a href="/">  -->
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="do_login">Sign in</button>
                <!-- </a> -->
            </form>
            <div class="registerButton">
                <a href="signup.php"> 
                  <button class="btn btn-lg btn-secondary btn-block" type="redirect" href="signup.php">Register</button>
                </a> 
                </div>
            
 
          


    <?php

        $data = $_POST;

        if( isset($data['do_login'])){
            $errors = array();
            $user = R::findOne('users', 'login = ?', array($data['login']));

            if ($user){
                // user found
                if( password_verify($data['password'], $user ->password)){
                    // verrification successfull
                    //user logging in
                    $_SESSION['logged_user'] = $user;
                    // echo '<div style="color: green;">Successfully loged in </br>
                    // you can access to link <a href="/"> Hompage</a></div><hr>';
                    header("Location: /");
                } else {
                    $errors[] = 'wrong pass';
                }
            } else {
                $errors[] = 'user not found';
            }
            if ( ! empty($errors)){
                echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';

            } else {

            }
        }
    ?>
        </header>
        
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>

</html>
<?php endif ; ?>