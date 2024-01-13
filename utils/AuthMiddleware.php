<?php

// middleware auth login
namespace AuthMiddleware;
require_once '../../configs/config.php'; // memanggil database

// Auth Middleware
class AuthMiddleware {
    public static function check(){
        if(!isset($_SESSION['user']))
        {
            ?>
            <script>
                window.location = '../login.php';
            </script>
            <?php
        }
    }
}