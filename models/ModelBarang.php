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
        $data = new ModelBarang($this->db_hostname, $this->db_username, $this->db_password, $this->db_database);

        // id barang
        $nextIDBarang = "SELECT id_barang FROM barang ORDER BY id_barang DESC LIMIT 1";
        $result = mysqli_query($data, $nextIDBarang);
        if($result)
        {
            $row = mysqli_fetch_assoc($result);
            if($row)
            {
                $lasID  = $row['id_barang'];
                $nextID = 'IDBRG' . ((int)substr($lasID, 5) + 1);
            }
            else {
                $nextID = 'IDBRG1';
            }
        }
        else {
            $nextID = 'IDBRG1';
        }

        $query = "INSERT INTO barang VALUES ('$nextID', :nama_barang, :kategori_barang, :desc_barang, :status)";
        $statement = $this->connect->prepare($query);

        $statement->bindParam($nextID, $dataname['id_barang']);
        $statement->bindParam(':nama_barang', $dataname['nama_barang']);
        $statement->bindParam(':kategori_barang', $dataname['kategori_barang']);
        $statement->bindParam(':desc_barang', $dataname['desc_barang']);
        $statement->bindParam(':status', $dataname['status']);

        if($statement->execute())
        {
            return $this->connect->lastInsertId();
        }
        else {
            return false;
        }
    }

    public function update($dataname)
    {
        $data = new ModelBarang($this->db_hostname, $this->db_username, $this->db_password, $this->db_database);

        // id barang
        $nextIDBarang = "SELECT id_barang FROM barang ORDER BY id_barang DESC LIMIT 1";
        $result = mysqli_query($data, $nextIDBarang);
        if($result)
        {
            $row = mysqli_fetch_assoc($result);
            if($row)
            {
                $lasID  = $row['id_barang'];
                $nextID = 'IDBRG' . ((int)substr($lasID, 5) + 1);
            }
            else {
                $nextID = 'IDBRG1';
            }
        }
        else {
            $nextID = 'IDBRG1';
        }

        $query = "UPDATE barang SET nama_barang = :nama_barang, kategori_barang = :kategori_barang, 
        desc_barang = :desc_barang, status = :status WHERE id_barang = '$nextID'";

        $statement = $this->connect->prepare($query);

        $statement->bindParam($nextID, $dataname['id_barang']);
        $statement->bindParam(':nama_barang', $dataname['nama_barang']);
        $statement->bindParam(':kategori_barang', $dataname['kategori_barang']);
        $statement->bindParam(':desc_barang', $dataname['desc_barang']);
        $statement->bindParam(':status', $dataname['status']);

        if($statement->execute())
        {
            return true;
        }
        else {
            return false;
        }
    }
    
    public function getDataById($dataname)
    {
        $data = new ModelBarang($this->db_hostname, $this->db_username, $this->db_password, $this->db_database);

        // id barang
        $nextIDBarang = "SELECT id_barang FROM barang ORDER BY id_barang DESC LIMIT 1";
        $result = mysqli_query($data, $nextIDBarang);
        if($result)
        {
            $row = mysqli_fetch_assoc($result);
            if($row)
            {
                $lasID  = $row['id_barang'];
                $nextID = 'IDBRG' . ((int)substr($lasID, 5) + 1);
            }
            else {
                $nextID = 'IDBRG1';
            }
        }
        else {
            $nextID = 'IDBRG1';
        }

        $query = "SELECT * FROM barang WHERE id_barang = '$nextID'";
        $statement = $this->connect->prepare($query);

        $statement->bindParam($nextID, $dataname['id_barang']);
        $statement->execute();

        $fetchData = $statement->fetch(PDO::FETCH_ASSOC);
        return $fetchData;
    }

    public function delete($dataname)
    {
        $data = new ModelBarang($this->db_hostname, $this->db_username, $this->db_password, $this->db_database);

        // id barang
        $nextIDBarang = "SELECT id_barang FROM barang ORDER BY id_barang DESC LIMIT 1";
        $result = mysqli_query($data, $nextIDBarang);
        if($result)
        {
            $row = mysqli_fetch_assoc($result);
            if($row)
            {
                $lasID  = $row['id_barang'];
                $nextID = 'IDBRG' . ((int)substr($lasID, 5) + 1);
            }
            else {
                $nextID = 'IDBRG1';
            }
        }
        else {
            $nextID = 'IDBRG1';
        }

        $query = "DELETE FROM barang WHERE id_barang = '$nextID'";
        $statement = $this->connect->prepare($query);
        $statement->bindParam($nextID, $dataname['id_barang']);

        if($statement->execute())
        {
            return true;
        }
        else {
            return false;
        }
    }
}