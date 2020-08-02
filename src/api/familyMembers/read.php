<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
  
// include database and object files
include_once '../config/database.php';
include_once '../objects/familyMembers.php';
  
// instantiate database and product object
$database = new Database();
$db = $database->getConnection();
  
// initialize object
$familyMembers = new familyMembers($db);
  
// query products
$stmt = $familyMembers->read();
$num = $stmt->rowCount();
  
// check if more than 0 record found
if($num>0){
  
    // products array
    $familyMembers_arr=array();
    $familyMembers_arr["records"]=array();
  
   
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    
        extract($row);
  
        $familyMembers_item=array(
            "childname" => $childname,
            
        );
  
        array_push($familyMembers_arr["records"], $familyMembers_item);
    }
  
    // set response code - 200 OK
    http_response_code(200);
  
    // show products data in json format
    echo json_encode($products_arr);
}
  
// no products found will be here