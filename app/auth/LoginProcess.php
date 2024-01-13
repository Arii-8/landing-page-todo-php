<?php 

// require
require "../../configs/config.php";

// check request method post
if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    // take data from user
    $nama_user = $_POST['nama_user'];
    $pass_user = md5($_POST['pass_user']);

    // select data from database
    $sql = "SELECT * FROM auth_users WHERE nama_user='$nama_user' AND pass_user='$pass_user'";
    $query = mysqli_query($connect, $sql);
    
    if(!$query){
        print "Error: " . mysqli_error($connect);
        die();
    }
    
    // check auth account user
    /* 
     * validasi login jika form login kosong 
     * ログインフォームが空の場合のログイン検証
     * (ログインフォームがからのばあいのログインけんしょう)
     */
    if(empty($nama_user) || empty($pass_user))
    {
        ?>
        <p style="color:red;">Form login harus diisi!</p>
        <script>
            alert('Form login harus diisi!');
            window.location = "../login.php";
            </script>
        <?php
    }
    
    // jika validasi user
    if(mysqli_num_rows($query) > 0)
    {
        // check validasi password
        $user = mysqli_fetch_assoc($query);

        // membuat session
        session_start();
        $_SESSION['id_user'] = $user['id_user'];
        ?> 
            <script>
                alert('いらっしゃいませ!');
                window.location = "../dashboard.php";
            </script>
            <?php
            exit();
        }    
        else {
            ?>
            <p style="color:red;">Username / Password Salah!</p>
            <script>
                alert('Username / Password Salah!');
                window.location = "../login.php";
            </script>
            <?php
        }

    if(is_array($user) || is_object($user) || is_string($user)){
        
    }
}
