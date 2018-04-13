<?php
$conn = new mysqli('localhost', 'root', '', 'map');
// Check connection
$set = '';
$set1 = '';
$id = '';
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $sql = "SELECT * FROM drag";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
                //echo '<pre>'; print_r($row);
                $set[]  = $row['timestamp_id'];
                $set1[]  = $row['div_id'];
                $id[]  = $row['id'];
            }
            $setarray = array('timestamp_id'=>$set,'div_id'=>$set1,'id'=>$id);

            echo json_encode($setarray);
    } else {
            echo "0";
        }
    
    
}
?>