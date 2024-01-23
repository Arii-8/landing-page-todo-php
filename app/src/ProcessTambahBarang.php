<?php 

require('../../models/ModelBarang.php');

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $database = new ModelBarang("localhost", "root", "", "todo-php");

    $nama_barang = $_POST['nama_barang'];
    $kategori_barang = $_POST['kategori_barang'];
    $desc_barang = $_POST['desc_barang'];
    $status = $_POST['status'];
    
    $data = [
        'nama_barang' => $nama_barang,
        'kategori_barang' => $kategori_barang,
        'desc_barang' => $desc_barang,
        'status' => $status
    ];

    
    if($data)
    {
        $result = $database->create($data);
        ?>
        <script>
            alert('Menambahkan data berhasil!');
            window.location = "../dashboard.php";
        </script>
        <?php
    }
    else {
        ?>
            <script>
                alert('Gagal menambahkan data!');
                window.location = "TambahBarang.php";
            </script>
        <?php
    }
}