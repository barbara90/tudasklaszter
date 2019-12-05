<?php

include('config.php');

$pages = array();

$sql = "SELECT * FROM menu";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $pages[$row["route"]] = array('file' => $row["file"], 'link' => $row["menu"]);
    }
} else {
    echo "0 results";
}
$con->close();


$error_page = array('file' => 'error');
