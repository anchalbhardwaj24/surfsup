
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
/*

include 'connection.php';
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['search']);
echo var_dump($_REQUEST);

// Attempt insert query execution
$sql = "SELECT * FROM businesses WHERE MATCH(name) AGAINST('$name')";
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
<?php
// Close connection
mysqli_close($link);*/
?>
