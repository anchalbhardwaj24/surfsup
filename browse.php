
<!DOCTYPE html>
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
    <p></p>

    <?php
    include 'connection.php';
    $sql1 = "SELECT * FROM businesses";
    $resultset = mysqli_query($link, $sql1);
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

  </body>
</html>
