<?php
class Meeting{
    private $firstname;
    private $lastname;
    private $email;
    private $phone;
    private $topic;
    private $description;
    private $date;
    private $conn;

    public function __construct($conn){
        $this->conn = $conn;
    }

    public function get_Metting(){
      $result = [];
      $sql = "SELECT * FROM `meeting`";
      $query = $this->conn->prepare($sql);
      if($query->execute()){
          if($query->rowCount()){
              while($row = $query->fetch(PDO::FETCH_ASSOC)){
                  $result[] = $row;
              }
          }
      }
      return $result;
    }

}
?>