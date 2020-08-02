<?php
class deadlineAndAppointments{
  
    // database connection and table name
    private $conn;
    private $table_name = "deadlinesandappointments";
  
    // object properties
    public $deadlineId;
    public $deadlineName;
    public $childName;
    public $dateTimeset;
    public $details;
    public $notes;
    
  
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
    
    function read(){
  
    // select all query
    $sql = "CALL getAllDeadlinesAndAppointments";
  
    // prepare query statement
    $stmt = $this->conn->prepare($sql);
  
    // execute query
    $stmt->execute();
  
    return $stmt;
}
    function create(){
  
    // query to insert record
    $query = "INSERT INTO
                " . $this->table_name . "
            SET
                deadlineId=:deadlineId, deadlineName=:deadlineName, childName=:childName ,dateTimeset=:dateTimeset, details=:details ,notes=:notes ";
  
    // prepare query
    $stmt = $this->conn->prepare($query);
  
    // sanitize
    $this->deadlineId=htmlspecialchars(strip_tags($this->deadlineId));
    $this->deadlineName=htmlspecialchars(strip_tags($this->deadlineName));
    $this->childName=htmlspecialchars(strip_tags($this->childName));
    $this->dateTimeset=htmlspecialchars(strip_tags($this->dateTimeset));
    $this->details=htmlspecialchars(strip_tags($this->details));
    $this->notes=htmlspecialchars(strip_tags($this->notes));
   
  
    // bind values
    $stmt->bindParam(":deadlineId", $this->deadlineId);
    $stmt->bindParam(":deadlineName", $this->deadlineName);
    $stmt->bindParam(":childName", $this->childName);
    $stmt->bindParam(":dateTimeset", $this->dateTimeset);
    $stmt->bindParam(":details", $this->details);
    $stmt->bindParam(":notes", $this->notes);
  
    // execute query
    if($stmt->execute()){
        return true;
    }
  
    return false;
      
}
}
    



?>