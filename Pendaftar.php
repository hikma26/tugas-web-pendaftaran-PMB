<?php
class Pendaftar {
  private $conn;

  public function __construct($db) {
    $this->conn = $db;
  }

  public function getAll() {
    $result = $this->conn->query("SELECT * FROM pendaftar ORDER BY id DESC");
    return $result;
  }

  public function verifikasi($id, $status) {
    // Query untuk update status pendaftar
    $stmt = $this->conn->prepare("UPDATE pendaftar SET status=? WHERE id=?");
    $stmt->bind_param("si", $status, $id);
    return $stmt->execute(); // Eksekusi query
  }
}
?>
