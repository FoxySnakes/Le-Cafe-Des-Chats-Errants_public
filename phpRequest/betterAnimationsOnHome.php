<?php
try{

$mysqli = new mysqli("server", "username", "password", "dbname");
mysqli_set_charset($mysqli, "utf8mb4");
$result = $mysqli->query("SELECT * FROM animations WHERE enabled = 'true' AND popularity IN (1,2)");
while($row = $result->fetch_assoc()){
    echo '<div class="position-relative">
    <img class="rounded-big blur darker" src="'.$row["pictureUrl"].'" loading="lazy" alt="" width="300px">
    <p class="position-absolute text-white fw-medium">'.$row["name"].'</p>
    </div>';
}

}
catch(Exception $e){
    echo 'Erreur : ',$e,"\n";
    die();
}

?>