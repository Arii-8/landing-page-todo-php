<?php 

// import config
require '../../configs/config.php';

if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $sql = "DELETE FROM auth_users WHERE id_user = '$id'";

?>

<?php 
    if($connect->query($sql) === TRUE)
    { ?>
        <script>
            alert('Data berhasil dihapus!');
            window.location = 'UsersList.php';
        </script>
      <?php 
    }
    else { ?>
        <script>
            alert('Data gagal dihapus!');
            window.location = 'UsersList.php';
        </script>
      <?php
    }
}

