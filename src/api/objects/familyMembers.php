<?php
class familyMembers{
  
    // database connection and table name
    private $conn;
    private $table_name = "familymembers";
  
    // object properties

    public $childname;
    
  
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
    
    
    // read products
function read(){
  
    // select all query
    $query = "SELECT
                c.childId as category_name, p.childname
            FROM
                " . $this->table_name . " p
                LEFT JOIN
                    categories c
                        ON p.category_id = c.id
            ORDER BY
                p.created DESC";
  
    // prepare query statement
    $stmt = $this->conn->prepare($query);
  
    // execute query
    $stmt->execute();
  
    return $stmt;
}


// create product
function create(){
  
    // query to insert record
    $query = "INSERT INTO
                " . $this->table_name . "
            SET
                 childname=:childname  ";
  
    // prepare query
    $stmt = $this->conn->prepare($query);
  
    // sanitize
    
    $this->childname=htmlspecialchars(strip_tags($this->childname));
   
  
    // bind values
    
    $stmt->bindParam(":childname", $this->childname);
    
 
  
    // execute query
    if($stmt->execute()){
        return true;
    }
  
    return false;
      
}
}

?>