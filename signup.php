<html lang='eng'>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link  href="/css/style.css" rel="stylesheet">
    </head>
    <body class="text-center">
        <header id="signUpHeader">
            <form class="form-signin" action="signup.php" method="POST">
            <a href="http://chatfeed.home/">
                <img class="mb-2" src="images/Livechat_logo-750x410.jpg" alt="" width="288" height="144">
                </a>
                <h1 class="h3 mb-3 font-weight-normal">Please register</h1>
                
                <label for="inputLogin" class="sr-only">Login</label>
                <input type="login" id="inputLogin" name="login" class="form-control"  value="<?php echo @$data['login']; ?>" placeholder="Your login" required autofocus>

                <label for="inputEmail" class="sr-only">Email</label>
                <input type="email" id="inputLogin" name="email" class="form-control" value="<?php echo @$data['email'];?>" placeholder="Email" required>
                
                <label for="inputFullName" class="sr-only">Full name</label>
                <input type="fullname" id="inputLogin" name="fullname" class="form-control"  value="<?php echo @$data['fullname']; ?>" placeholder="Name and Surname" required autofocus>

                <label for="inputPhone" class="sr-only">Phone number</label>
                <input type="phone" id="inputLogin" name="telephone" class="form-control" value="<?php echo @$data['telephone'];?>" placeholder="Insert phone number" required>
                
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" id="inputLogin" name="password" class="form-control" value="<?php echo @$data['password'];?>" placeholder="Password" required>
                
                <label for="inputPassword2" class="sr-only">Password validation</label>
                <input type="password" id="inputLogin" name="password_2" class="form-control"  placeholder="Re enter Password" required>
                
                
                <div class="checkbox mb-3">
                </div class="signinButton">
                <!-- <a href="signup.php">  -->
                  <button class="btn btn-lg btn-secondary btn-block" type="submit" name="do_signup" href="login.php">Register</button>
                  <!-- type="redirect" href="login.php -->
                <!-- </a> -->
              </form>



        </header>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
<?php
require "db.php";

$data = $_POST;

if (isset($data['do_signup'])){
    // register errors
    $errors = array();
    if (trim($data['login']) == ''){
        $errors[] = 'Insert login';
    } if (trim($data['email']) == ''){
        $errors[] = 'Insert Email';
    } if (trim($data['fullname']) == ''){
        $errors[] = 'Insert Full name';
    } if (trim($data['telephone']) == ''){
        $errors[] = 'Insert phone number';
    } if ($data['password'] == ''){
        $errors[] = 'wrong password';
    } if ($data['password_2'] != $data['password']){
        $errors[] = 'wrong second password';
    }
        //alredy exist errors
      if (R::count('users', "login = ?", array($data['login'])) > 0){
        $errors[] = 'that login alredy exist';
    } if (R::count('users', "email = ?", array($data['email'])) > 0){
        $errors[] = 'that email alredy exist';
    } if (R::count('users', "telephone = ?", array($data['telephone'])) > 0){
        $errors[] = 'that number alredy exists';
    }


    if (empty($errors)){
        //register here
        $user = R::dispense( 'users' );
        $user->login = $data['login'];
        $user->email = $data['email'];
        $user->fullname = $data['fullname'];
        $user->telephone = $data['telephone'];
        $user->password = password_hash($data['password'], PASSWORD_DEFAULT );
        R::store($user);
        echo '<div style="color: green;">Successfully registred</div><hr>';
        header("Location: login.php");


    } else {
        echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
    }
}

?>