<?php 

// script logout
session_start();
session_unset();
session_destroy();

?>

<script>
    alert('Anda telah logout!');
    window.location = "login.php";
</script>