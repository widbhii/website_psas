<?php

if(isset($_SESSION['user_id'])){

    include_once __DIR__ . "/config.php";

    $user_id = $_SESSION['user_id'];

    $query = mysqli_query(
        $conn,
        "SELECT theme
        FROM users
        WHERE id='$user_id'"
    );

    $data = mysqli_fetch_assoc($query);

    $current_theme = strtolower($data['theme']);

}
else{

    $current_theme = "default";

}

?>