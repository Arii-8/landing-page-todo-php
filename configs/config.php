<?php 

// define connect to database (ていぎする)
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'todo-php');

// connecting database (でーたべーすにせつぞくする)
$connect = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// check if connect error (エラーチェック)
if(mysqli_connect_error())
{
    // print message せつぞくエラー
    print "Failed to connect mysql : " . mysqli_connect_error();
    die();
}

?>