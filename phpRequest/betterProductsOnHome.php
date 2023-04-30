<?php
try{

$mysqli = new mysqli("server", "username", "password", "dbname");
mysqli_set_charset($mysqli, "utf8mb4");
$result = $mysqli->query("SELECT * FROM products WHERE enabled = 'true' ORDER BY popularity LIMIT 10");
while($row = $result->fetch_assoc()){
    $price = explode(".",$row['price'])[0].'<sup>,'.explode(".",$row['price'])[1].'</sup>';
    echo '<div class="cart-item d-flex flex-column align-items-center col-12 col-md-6 col-xl-4 col-xxl-3 px-1">
    <div class="d-flex flex-column align-items-center">
        <div class="d-flex align-items-center justify-content-center cart-item-img bg-main">
            <img src="'.$row["pictureUrl"].'" alt="">
        </div>
        <div class="d-flex flex-column align-items-end text-main fw-medium px-2 w-100">
            <p class="w-100 text-center fw-semibold py-2">'.ucfirst($row["name"]).'</p>
            <p class="border-main p-1 rounded">'.$price.'€</p>
        </div>
    </div>
</div>';
}

}
catch(Exception $e){
    echo 'Erreur : ',$e,"\n";
    die();
}

?>