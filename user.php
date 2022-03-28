<?php
// require "db.php";
require "config.php";
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <script type="text/javascript" src="//code.jquery.com/jquery-3.6.0.min.js"></script>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

            <!-- include summernote css/js-->
        <link href="libs/summernote/summernote-bs4.css" rel="stylesheet">
        <script src="libs/summernote/summernote-bs4.js"></script>

        <link  href="css/style.css" rel="stylesheet">
    </head>

    <body class="mainBody">
        
        <?php if ( isset($_SESSION['logged_user'])) :  ?>
        <header class="mainHeader">
            <div class="headerLogo"> 
                <a href="http://chatfeed.home/">
                <img class="mb-2" src="images/Livechat_logo-750x410.jpg" alt="" width="288" height="144">
                </a>
            </div>
            <div class="LogedLoginName">
                <?php  ?>
                <p> Hello,
                    <a href="/user.php?id=<?php echo $_SESSION['logged_user']  -> id; ?>"><?php echo $_SESSION['logged_user']  -> login; ?>!</a>
                </p>
                <hr>
                <a id="logoutMainButton" href="/logout.php">
                    <button class="btn-main-login btn-lg btn-primary btn-block" >LOGOUT</button>
                </a>
                <?php else : ?>
                <header class="mainHeaderOut">
                <div class="headerLogo"> 
                    <a href="http://chatfeed.home/">
                    <img class="mb-2" src="images/Livechat_logo-750x410.jpg" alt="" width="288" height="144">
                    </a>
                </div>
                <nav>
                    <div class="LogedLoginName">
                        <a href="login.php">
                            <button class="btn-main-login btn-lg btn-primary btn-block" type="submit" name="do_signup">LOGIN</button>
                        </a>
                        <?php endif ; ?>
                    </div>
                </nav>  
                </div>  
        </header>
        <section>
            <?php if ( isset($_SESSION['logged_user'])) :  ?>
                <hr>
                <h3>About me</h3>
                <div class="chat_block__content">
                    <div class="chat-container">
                    <p>The user profile information are here.</p>
                    <p><?php echo $_SESSION['logged_user']  -> fullname; ?></p>
                    <p><?php echo $_SESSION['logged_user']  -> email; ?></p>
                    <p id="user_id_number"><?php echo $_SESSION['logged_user']  -> id; ?></p> 
            
                    </div>
                </div>
                <hr>
                <div class="block" id="comment-add-form">
                    <div class="block__content">
                    
                        <form class="form" method="POST" action="/user.php?id=<?php echo $art['id']; ?>#comment-add-form">
                            <?php
                                 $usertoid =  $_SESSION['logged_user']  -> login;
                                $userid = mysqli_query($connection, "SELECT `id` FROM `users` WHERE `login` = ( '".$usertoid."' ) " );
                                $idfortheuser = mysqli_fetch_assoc($userid);
                                $idtouserid =  $idfortheuser['id'];
                                $usertoauthor =  $_SESSION['logged_user']  -> login;

                                if (isset($_POST['summersend'])){
                                    $errors = array();
                                    
                                    if ( $_POST['text'] == ''){
                                        $errors[] = 'insert text';
                                    }
                                    
                                    if ( empty($errors)){
                                        mysqli_query($connection, "INSERT INTO `comments` ( `author`, `text`, `user_id`) VALUES ( '".$usertoauthor."', '".$_POST['text']."', '".$idtouserid."' )");            
                                       
                                        // echo '<span style="color: rgreened; font-weight: bold; margin-bottom: 10px; display: block;"> comment successfully added </span><br>';
                                        
                                    } else {
                                        //error output
                                        // echo '<span style="color: red; font-weight: bold; margin-bottom: 10px; display: block;">' . $errors['0'] .  '</span><br>';
                                    }
                                }
                            ?>
                                    <form id="summernotetextandbuttom" method="post">
                                    <textarea class="summernote"  name="text"></textarea>
                                    <!-- <input type="submit" value="Send" name="summersend" /> -->
                                    <button class="btn btn-lg btn-primary btn-block" type="submit" id="test" name="summersend">Add comment</button>

                                    </form>

                    
                        </form>
                    </div>
                </div>
                
                
                
            <?php else : ?>
            <p>you need to autorize to MANAGE comments</p>
            <?php endif ; ?>

            <hr>
            <div class="block" ih="comments-block-afre adding">
                <h3>MY FEED</h3>
                <div class="block__content">
                    <div class="articles articles__vertical">
                    
                    <?php
                    $comments = mysqli_query($connection, "SELECT * FROM `comments`  WHERE `user_id` = " . (int) $idtouserid . " ORDER BY `id` DESC");
                        if (mysqli_num_rows($comments) <= 0) {
                            echo "no comments";
                        }
                        while($comment = mysqli_fetch_assoc($comments)){  
                    ?>
                    <article class="article">
                        <div class="article__info">
                            <a href="/user.php?id=<?php echo $comment['user_id']; ?>">
                            <?php echo $comment['author']; ?></a>
                            <div class="article__info__meta"></div>
                            <div class="article__info__preview"><p><?php echo $comment['text'];?></p></div>
                        </div>
                    </article>
                    <?php
                        }
                    ?>
                    
                    </div>
                </div>
            </div>
           
            <hr>

        </section>
        <footer>
        </footer>
        
            <script>
                // $('#summernote').summernote({
                // placeholder: "Write your content here",
                // tabsize: 2,
                // height: 100
                // });

                // $("#test").click(function() {
                // var markupStr = $('#summernote').summernote('code');
                // alert(markupStr);
                // });
                </script>
        <script src="https://unpkg.com/@popperjs/core@2"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></>
        <script src="js/script.js"></script>
    </body>
</html>    
