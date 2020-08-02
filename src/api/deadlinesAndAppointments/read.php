<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
 
// include database and object files
include_once '/config/database.php';
include_once '../objects/deadlinesAndAppointments.php';
  
// instantiate database and product object
$database = new Database();
$db = $database->getConnection();
  
// initialize object
$deadlinesAndAppointments = new deadlinesAndAppointments($db);
  
// query products
$stmt = $deadlinesAndAppointments->read();
$num = $stmt->rowCount();
  
// check if more than 0 record found
if($num>0){
  
    // products array
    $deadlinesAndAppointments_arr=array();
    $deadlinesAndAppointments_arr["records"]=array();
  
  
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        // extract row
        // this will make $row['name'] to
        // just $name only
        extract($row);
  
        $product_item=array(
            "deadlineId" => $id,
            "deadlineName" => $name,
            "childName" => html_entity_decode($childName),
            "dateTimeset" => $dateTimeset,
            "details" => $details,
            "notes" => $notes
        );
  
        array_push($deadlinesAndAppointments_arr["records"], $deadlinesAndAppointments_item);
    }
  
    // set response code - 200 OK
    http_response_code(200);
  
    // show products data in json format
    echo json_encode($deadlinesAndAppointments_arr);
}
  
    else{

        // set response code - 404 Not found
        http_response_code(404);

        // tell the user no products found
        echo json_encode(
            array("message" => "No deadlinesAndAppointments found.")
        );
    }



?>