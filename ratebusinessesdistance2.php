<?php
//echo var_dump($_REQUEST);
include 'connection.php';
$rating = mysqli_real_escape_string($link, $_REQUEST['rating']);
session_start();
$id = $_SESSION['id'];

$rating = intval($rating);
$sql = "UPDATE businesses SET totalscoredistance = totalscoredistance+ '$rating' WHERE id='$id'";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not execute $sql. " . mysqli_error($link);
}

$sql1= "UPDATE businesses SET numberofratingsdistance = numberofratingsdistance + 1 WHERE id = '$id'";
if(mysqli_query($link, $sql1)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not execute $sql1. " . mysqli_error($link);
}
?>
