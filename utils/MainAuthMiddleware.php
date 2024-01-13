<?php 

// main middleware auth login
namespace MainAuthMiddleware;

session_start();

class MainAuthMiddleware {
    public static function MainCheck(){
        if(!isset($_SESSION['user']))
        {
            header('Location: ../app/login.php');
        }
    }
}
