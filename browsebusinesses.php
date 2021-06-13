<!<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Black Panthers</title>
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <script src="script.js"></script>
  </head>
  <body>
    <header class = "topnavbar">
      <img class = "logo" src = "logo.png">
      <div class = "topnav">
        <a href = "browse.php">Browse</a>
        <a href = "search.php">Search</a>
        <a href = "upload.php">Upload</a>
      </div>
    </header>
<?php
include 'connection.php';
session_start();
$id = $_GET['id'];
$_SESSION['id'] = $id;
echo $_SESSION['id'];
// Attempt select query execution
$sql = "SELECT * FROM businesses WHERE id = '$id'";
$resultset = mysqli_query($link, $sql);
while( $record = mysqli_fetch_assoc($resultset) ) { ?>
<div class="card">
  <div class="container">
    <?php
  	echo "<h3><b><a href ='browsebusinesses.php?id=".$record['id']."'> ".$record['name']."</a></b></h3>";
  	?>
        <p><?php echo $record['address']; ?></p>
        <p><?php echo $record['type']; ?></p>
      </div>
    </div>
    <?php } ?>
    <label for="cars">Rate this business on their mask policy on a scale of 1 to 5 with 5 being the best:</label>
<form action="ratebusinessesmask2.php" method="post">
    <select name="rating" id="rating">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
    <input type="submit" value="Submit">
</form>

<form action="ratebusinessesdistance2.php" method="post">
    <select name="rating" id="rating">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
    <input type="submit" value="Submit">
</form>

<form action="ratebusinessessanitation2.php" method="post">
    <select name="rating" id="rating">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
    <input type="submit" value="Submit">
</form>
  </body>
</html>
