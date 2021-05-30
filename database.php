<?php
class Database
{
  protected
    $table = '',
    $host = '',
    $user = '',
    $pass = '',
    $dbname = '',
    $conn = null;
  public function __construct($config)
  {
    $this->host = $config['host'];
    $this->user = $config['user'];
    $this->pass = $config['pass'];
    $this->dbname = $config['dbname'];

    $this->connect();
  }
  protected function connect()
  {
    try {
      $this->conn = new PDO(
        "mysql:host=$this->host;dbname=$this->dbname",
        $this->user,
        $this->pass
      );
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      echo 'Lỗi kết nối: ' . $e->getMessage();
    }
  }
  public function search($data = '')
  {
    // select ... from ... where name like N'%...%'
    try {
      // $stmt2 = $name == 1 ? $name : "name like N'%$name%'";
      $sqlString = "select * from $this->table where name like N'%$data%'";
      $query = $this->conn->prepare($sqlString);
      $query->execute();
      $resultArr = [];
      while ($row = $query->fetch(PDO::FETCH_ASSOC)) $resultArr[] = $row;
      return $resultArr;
    } catch (PDOException $e) {
      echo "Lỗi đọc dữ liệu: " . $e->getMessage();
    }
  }
  public function get($data = [])
  {
    // select * from ... where a=? and b=?...
    try {
      $stmt = join("=? and ", array_keys($data));
      $stmt .= "=?";
      $sqlString = "select * from $this->table where $stmt";
      // echo $sqlString;
      $query = $this->conn->prepare($sqlString);
      $query->execute(array_values($data));
      $resultArr = [];
      while ($row = $query->fetch(PDO::FETCH_ASSOC)) $resultArr[] = $row;
      return $resultArr;
    } catch (PDOException $e) {
      echo "Lỗi đọc dữ liệu: " . $e->getMessage();
    }
  }
  public function insert($data = [])
  {
    // insert into ...(...) values (...)
    try {
      $stmt1 = join(',', array_keys($data));
      $stmt2 = join(',', array_fill(0, count($data), '?'));
      $sqlString = "insert into $this->table($stmt1) values ($stmt2)";
      // echo $sqlString;
      $query = $this->conn->prepare($sqlString);
      $query->execute(array_values($data));
    } catch (PDOException $e) {
      echo 'Lỗi thêm dữ liệu: ' . $e->getMessage();
    }
  }
  public function delete($id)
  {
    // delete from ... where id=...
    try {
      $sqlString = "delete from $this->table where id='$id'";
      $query = $this->conn->prepare($sqlString);
      $query->execute();
    } catch (PDOException $e) {
      echo 'Lỗi xoá dữ liệu: ' . $e->getMessage();
    }
  }
  public function update($id, $data = [])
  {
    // update table set ...=... where id=...
    try {
      $stmt = join("=?,", array_keys($data));
      $stmt .= "=?";
      $sqlString = "update $this->table set $stmt where id='$id'";
      // echo $sqlString;
      $query = $this->conn->prepare($sqlString);
      $query->execute(array_values($data));
    } catch (PDOException $e) {
      echo 'Lỗi sửa dữ liệu: ' . $e->getMessage();
    }
  }
  public function table($tableName)
  {
    $this->table = $tableName;
    return $this; //fluent interface
  }
  public function isExist($data = [])
  {
    return $this->get($data) != null;
  }
}
