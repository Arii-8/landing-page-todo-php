<?php

class ModelBarang {

    // configurasi database
    private $db_hostname    = "localhost";
    private $db_username    = "root";
    private $db_password    = "";
    private $db_database    = "todo-php"; 

    // connection
    private $connect;

    public function __construct($hostname, $username, $password, $database)
    {
        $this->db_hostname = $hostname;
        $this->db_username = $username;
        $this->db_password = $password;
        $this->db_database = $database;

        $dsn = "mysql:host={$this->db_hostname};dbname={$this->db_database}";
        try {
            $this->connect = new PDO($dsn, $this->db_username, $this->db_password);
            $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $error)
        {
            die("Failed connect to database: " . $error->getMessage());
        }
    }

    public function index()
    {
        $querySelect = "SELECT * FROM barang";
        $statement = $this->connect->query($querySelect);

        return $statement;
    }

    public function create($dataname)
    {
        $query = "SELECT id_barang FROM barang ORDER BY id_barang DESC LIMIT 1";
        $statement = $this->connect->query($query);
        $row = $statement->fetch(PDO::FETCH_ASSOC);
        $nextID = ($row) ? 'IDBRG' . ((int)substr($row['id_barang'], 5) + 1) : 'IDBRG1';

        $query = "INSERT INTO barang (id_barang, nama_barang, kategori_barang, desc_barang, status) 
                  VALUES (:id_barang, :nama_barang, :kategori_barang, :desc_barang, :status)";
        $statement = $this->connect->prepare($query);

        $statement->bindParam(':id_barang', $nextID);
        $statement->bindParam(':nama_barang', $dataname['nama_barang']);
        $statement->bindParam(':kategori_barang', $dataname['kategori_barang']);
        $statement->bindParam(':desc_barang', $dataname['desc_barang']);
        $statement->bindParam(':status', $dataname['status']);

        if ($statement->execute())
        {
            return $this->connect->lastInsertId();
        } else {
            var_dump($statement->errorInfo());
            return false;
        }
    }

    public function update($dataname)
    {
        $query = "UPDATE barang SET nama_barang = :nama_barang, kategori_barang = :kategori_barang, 
            desc_barang = :desc_barang, status = :status WHERE id_barang = :id_barang";

        $statement = $this->connect->prepare($query);

        $statement->bindParam(':id_barang', $dataname['id_barang']);
        $statement->bindParam(':nama_barang', $dataname['nama_barang']);
        $statement->bindParam(':kategori_barang', $dataname['kategori_barang']);
        $statement->bindParam(':desc_barang', $dataname['desc_barang']);
        $statement->bindParam(':status', $dataname['status']);

        if ($statement->execute()) {
            return true;
        } else {
            var_dump($statement->errorInfo());
            return false;
        }
    }

    public function delete($id)
    {
        $query = "DELETE FROM barang WHERE id_barang = :id_barang";
        $statement = $this->connect->prepare($query);

        $statement->bindParam(':id_barang', $id);

        if($statement->execute())
        {
            return true;
        }
        else {
            var_dump($statement->errorInfo());
            return false;
        }
    }
}