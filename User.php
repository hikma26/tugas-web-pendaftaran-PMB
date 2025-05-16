<?php
class User {
  private $conn;

  public function __construct($db) {
    $this->conn = $db;
  }

  public function login($username, $password) {
    $stmt = $this->conn->prepare("SELECT * FROM admin WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result && $row = $result->fetch_assoc()) {
      if (password_verify($password, $row['password'])) {
        return $row;
      }
    }
    return false;
  }
}
