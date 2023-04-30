<?php
try{
    
$mysqli = new mysqli("server", "username", "password", "dbname");
mysqli_set_charset($mysqli, "utf8mb4");
$result = $mysqli->query("SELECT * FROM animations WHERE enabled = 'true'");
$data = array();
while($row = $result->fetch_assoc()){
    array_push($data,$row);
}
print_r(json_encode($data));

}
catch(Exception $e){
    echo 'Erreur : ',$e,"\n";
    die();
}

?>