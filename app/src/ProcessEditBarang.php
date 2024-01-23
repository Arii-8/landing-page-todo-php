<?php 

require('../../models/ModelBarang.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $database = new ModelBarang("localhost", "root", "", "todo-php");

    $id_barang = $_POST['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    $kategori_barang = $_POST['kategori_barang'];
    $desc_barang = $_POST['desc_barang'];
    $status = $_POST['status'];

    $data = [
        'id_barang' => $id_barang,
        'nama_barang' => $nama_barang,
        'kategori_barang' => $kategori_barang,
        'desc_barang' => $desc_barang,
        'status' => $status
    ];

    $result = $database->update($data);

    if ($result) {
        ?>
        <script>
            alert('Update data berhasil!');
            window.location = "Management.php";
        </script>
        <?php
    } else {
        ?>
        <script>
            alert('Gagal update data!');
            window.location = "EditBarang.php";
        </script>
        <?php
    }
}
