<?php

// import configs database
require '../configs/config.php';

session_start();

// Auth Middleware
class AuthMiddleware {
    public static function check(){
        if(!isset($_SESSION['id_user']))
        {
            ?>
            <script>
                window.location = '../app/login.php';
            </script>
            <?php
            exit();
        }
    }
}