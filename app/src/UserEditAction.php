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
    $id_user = $_POST['id_user'];
    $nama_user = $_POST['nama_user'];
    $no_hp_user = $_POST['no_hp_user'];
    $email_user = $_POST['email_user'];
    $status = $_POST['status'];

    $pr_id_user = mysqli_real_escape_string($connect, $id_user);
    $pr_nama_user = mysqli_real_escape_string($connect, $nama_user);
    $pr_no_hp_user = mysqli_real_escape_string($connect, $no_hp_user);
    $pr_email_user = mysqli_real_escape_string($connect, $email_user);
    $pr_status = mysqli_real_escape_string($connect, $status);

    // validation register
    $sql = "UPDATE auth_users SET nama_user = '$pr_nama_user', no_hp_user = '$pr_no_hp_user', email_user = '$pr_email_user', status='$pr_status' WHERE id_user = '$pr_id_user'";
    $query = mysqli_query($connect, $sql);

    if($query)
    {
    ?>
        <script>
            alert('Update berhasil!');
            window.location = "UsersList.php";
        </script>
        <?php
    }
    else {
        ?>
        <script>
            alert('Update gagal, silahkan coba lagi!');
            window.location = "UsersDetail.php";
        </script>
        <?php
    }
    mysqli_close($connect);
}