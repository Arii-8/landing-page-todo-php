<?php 

// require
require "../../configs/config.php";

// check request method post
if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    // take data from user
    $nama_user = $_POST['nama_user'];
    $pass_user = md5($_POST['pass_user']);

    $pr_nama_user = mysqli_real_escape_string($connect, $nama_user);
    $pr_pass_user = mysqli_real_escape_string($connect, $pass_user);

    // select data from database
    $sql = "SELECT * FROM auth_users WHERE nama_user = '$pr_nama_user' AND pass_user = '$pr_pass_user'";
    $query = mysqli_query($connect, $sql);

    // check query
    if(!$query)
    {
        print "Query failed : " . mysql_error($connect);
    }

    // check auth account user
    if($query->num_rows > 0)
    {
        ?> 
        <script>
            alert('いらっしゃいませ!');
            windows.location = "../dashboard.php";
        </script>
        <?php
    }
    else {
        ?>
        <p style="color:red;">Username / Password Salah!</p>
        <script>
            alert('いらっしゃいませ!');
            windows.location = "../login.php";
        </script>
        <?php
    }
}