<?php

require_once "connect.php";

$query = "SELECT * FROM movie";

$result = mysqli_query($connection, $query);

if ($result) {

    $response = array();

    while ($row = mysqli_fetch_array($result)) {

        $moive = array();
        $moive['id'] = $row['id'];
        $moive['name'] = $row['name'];
        $moive['desc'] = $row['desc'];
        $moive['link_image'] = $row['link_image'];
        $moive['gnere'] = $row['gnere'];

        array_push($response, $moive);

    }

}else{
    echo "Error Connected";
}

echo json_encode($response);