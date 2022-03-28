<?php

$config = array(
    'title' => 'blog O_moem_brede',
    'facebook_url' => 'https://www.facebook.com/ruspect',
    'db' => array(
            'server' => 'localhost',
            'username' => 'user',
            'password' => 'user',
            'name' => 'feedman'
    )
);
$connection = mysqli_connect(
    $config['db']['server'],
    $config['db']['username'],
    $config['db']['password'],
    $config['db']['name']
);
if ($connection == false){
    echo 'ne udalos soedenit';
    echo mysqli_connect_error();
    exit();
}

require "db.php";
?>
