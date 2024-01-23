<?php

require "../../models/ModelBarang.php";

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
    $database = new ModelBarang("localhost", "root", "", "todo-php");

    $id = $_GET['id'];
    $isDelete = $database->delete($id);

    if ($isDelete) {
        ?>
        <script>
            alert('Hapus data berhasil!');
            window.location = "Management.php";
        </script>
        <?php
    } else {
        ?>
        <script>
            alert('Gagal hapus data!');
            window.location = "Management.php";
        </script>
        <?php
    }
}