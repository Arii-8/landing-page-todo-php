<?php 

// require
require "../../configs/config.php";

// check request method post
if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    // take data from user
    $nama_user = $_POST['nama_user'];
    $no_hp_user = $_POST['no_hp_user'];
    $email_user = $_POST['email_user'];
    $pass_user = md5($_POST['pass_user']);
    $status = $_POST['status'];

    $pr_nama_user = mysqli_real_escape_string($connect, $nama_user);
    $pr_no_hp_user = mysqli_real_escape_string($connect, $no_hp_user);
    $pr_email_user = mysqli_real_escape_string($connect, $email_user);
    $pr_pass_user = mysqli_real_escape_string($connect, $pass_user);
    $pr_status = mysqli_real_escape_string($connect, $status);

    // validation register
    if(empty($pr_nama_user) || empty($pr_no_hp_user) || empty($pr_email_user) || empty($pr_pass_user))
    {
        ?>
        <p style="color:red;">Form register harus diisi!</p>
        <script>
            alert('Form register harus diisi!');
            windows.location = "../register.php";
        </script>
        <?php
    }
    else {
        $sql = "INSERT INTO auth_users (nama_user, no_hp_user, email_user, pass_user, status) VALUES ('$pr_nama_user', '$pr_no_hp_user', '$pr_email_user', '$pr_pass_user', '$pr_status')";
        $query = mysqli_query($connect, $sql);

        if($query)
        {
            ?>
            <script>
                alert('Register Berhasil!');
                windows.location = "../login.php";
            </script>
            <?php
        }
        else {
            ?>
            <p style="color: red;">Register gagal!</p>
            <script>
                alert('Register gagal, silahkan coba lagi!');
                windows.location = "../register.php";
            </script>
            <?php
        }
        mysqli_close($connect);
    }
}