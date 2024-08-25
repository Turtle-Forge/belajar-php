<?php

class Mahasiswa_model
{
    // private $mhs = [
    //     [
    //         "nama" => "Benony Gabriel",
    //         "nim" => "105222002",
    //         "jurusan" => "Ilmu Komputer",
    //         "angkatan" => 2022
    //     ],
    //     [
    //         "nama" => "Ridho Pratama",
    //         "nim" => "105222022",
    //         "jurusan" => "Ilmu Kimia",
    //         "angkatan" => 2021
    //     ],
    //     [
    //         "nama" => "Jhon Doe",
    //         "nim" => "105222032",
    //         "jurusan" => "Teknik Elektro",
    //         "angkatan" => 2020
    //     ]
    // ];


    // melakukan konek database dengan cara PDO. tidak menggunakan mysqli query
    // private $dbh; // database handler
    // private $statement;

    // public function __construct()
    // {
    //     // data source name
    //     $dsn = "mysql:host=localhost;dbname=phpmvc";
    //     try {
    //         $this->dbh = new PDO($dsn, "root", "");
    //     } catch (PDOException $e) {
    //         die($e->getMessage());
    //     }

    //     // $this->mhs;
    // }




    // sebelum datanya digunakan, database nya akan diload terlebih dahulu
    private $table = "mahasiswa";
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMahasiswa()
    {
        // $this->statement = $this->dbh->prepare("SELECT * FROM mahasiswa");
        // $this->statement->execute();
        // return $this->statement->fetchAll(PDO::FETCH_ASSOC);

        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id)
    {
        $this->db->query("SELECT * FROM " . $this->table . " WHERE id=:id");
        $this->db->bind("id", $id);
        return $this->db->single();
    }

    public function tambahDataMahasiswa($data)
    {
        $query = "INSERT INTO mahasiswa VALUES ('', :nama, :nim, :jurusan, :angkatan)";

        $this->db->query($query);
        $this->db->bind("nama", $data["nama"]);
        $this->db->bind("nim", $data["nim"]);
        $this->db->bind("jurusan", $data["jurusan"]);
        $this->db->bind("angkatan", $data["angkatan"]);

        $this->db->execute();

        return $this->db->rowCount();
        // return 0;
    }

    public function hapusDataMahasiswa($id)
    {

        $query = "DELETE FROM mahasiswa WHERE id = :id";
        $this->db->query($query);
        $this->db->bind("id", $id);

        // eksekusi query
        $this->db->execute();

        return $this->db->rowCount();
        // return 0;
    }

    public function ubahDataMahasiswa($data)
    {
        $query = "UPDATE mahasiswa SET
                    nama = :nama, 
                    nim = :nim, 
                    jurusan = :jurusan, 
                    angkatan = :angkatan
                WHERE id = :id";

        $this->db->query($query);
        $this->db->bind("nama", $data["nama"]);
        $this->db->bind("nim", $data["nim"]);
        $this->db->bind("jurusan", $data["jurusan"]);
        $this->db->bind("angkatan", $data["angkatan"]);
        $this->db->bind("id", $data["id"]);

        $this->db->execute();

        return $this->db->rowCount();
        // return 0;
    }
}
