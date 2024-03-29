<?php 

// require
require "../../configs/config.php";

// check request method post
if($_SERVER['REQUEST_METHOD'] === 'POST')
{

    $next_iduser = "SELECT id_user from auth_users ORDER BY id_user DESC LIMIT 1";
    $result= mysqli_query($connect, $next_iduser);

    // Mengambil nomor dari ID terakhir dan menambahkan 1
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        if ($row) {
            $lastId = $row['id_user'];
            $nextId = 'IDUSR' . ((int)substr($lastId, 5) + 1);
        } else {
            $nextId = 'IDUSR1';
        }
    } else {
        $nextId = 'IDUSR1';
    }

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
            window.location = "../register.php";
        </script>
        <?php
    }
    else {
        $sql = "INSERT INTO auth_users (id_user, nama_user, no_hp_user, email_user, pass_user, status) VALUES ('$nextId', '$pr_nama_user', '$pr_no_hp_user', '$pr_email_user', '$pr_pass_user', '$pr_status')";
        $query = mysqli_query($connect, $sql);

        if($query)
        {
            ?>
            <script>
                alert('Register Berhasil!');
                window.location = "../login.php";
            </script>
            <?php
        }
        else {
            ?>
            <p style="color: red;">Register gagal!</p>
            <script>
                alert('Register gagal, silahkan coba lagi!');
                window.location = "../register.php";
            </script>
            <?php
        }
        mysqli_close($connect);
    }
}