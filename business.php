<!DOCTYPE HTML>
<!--
	Introspect by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Pandemic Reviews</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="css/main.css"/>
	</head>
	<body>
		
			<header id="header">
				<div class="inner">
					<a href="index.html" class="logo">VitaQuest</a>
					<nav id="nav">
						<a href="browse.php">Browse</a>
						<a href="generic.html">Search</a>
						<a href="elements.html">Upload</a>
					</nav>
				</div>
			</header>
			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>
  
    <section id="main" >
			<div class="inner">
				<header class="major special">
					<?php
						include 'connection.php';
						session_start();
						$id = $_GET['id'];
						$_SESSION['id'] = $id;
						
						$sql = "SELECT * FROM businesses WHERE id = '$id'";
						$resultset = mysqli_query($link, $sql);
						if( $record = mysqli_fetch_assoc($resultset) ) {
							$name = $record['name'];
							$address = $record['address'];
							$type = $record['type'];
							$numberofratingsmask = $record['numberofratingsmask'];
							$totalscoremask = $record['totalscoremask'];
							$numberofratingsdistance = $record['numberofratingsdistance'];
							$numberofratingssanitation = $record['numberofratingssanitation'];
							$totalscoredistance = $record['totalscoredistance'];
							$totalscoresanitation = $record['totalscoresanitation'];
						}
						
						?>
					<h1><?php
  	echo "<h2><b><a href ='browsebusinesses.php?id=".$record['id']."'> ".$record['name']."</a></b></h2>";
  	?></h1>
        </header>
        <section>
          <h4> Business Type: <?php echo $record['type']; ?></h4>
          <p> Business Address: <?php echo $record['address']; ?> </p>
        </section>
        <br>
        <section>
          <h3> Scores </h3>
          <div class="row uniform 50%">
          <p> Mask Score: </p>
		
		  <?php
		
		  
		  $maskscore = $record['totalscoremask'];
		  $masknumber = $record['numberofratingsmask'];
		  
		  if($maskscore > 0 and $masknumber > 0){
		  $mask = 10*($maskscore/$masknumber);
		   echo "<p>$mask</p>"; 
	  }
		  else {
		  	echo "<p>no rating</p>";
		  }
		 
		  
		  
		  
		  ?>
		  <br>
          <p> distance Score: </p>
		 
		  <?php
		  if($totalscoredistance > 0 and $numberofratingsdistance > 0){
		  $distance = 10*($totalscoredistance/$numberofratingsdistance);
		  echo "<p>$distance</p>";
	  }
		  else {
			  echo "<p>no rating</p>";
		  }
		   
		  
		  
		  ?>
		  <br>
          <p> sanitation Score: </p>
		
		  <?php
		  
		  if($totalscoresanitation >0 and $numberofratingssanitation >0){
		  $sanitation = 10*($totalscoresanitation/$numberofratingssanitation);
		  echo $sanitation;} else {
		  echo "<p>no rating</p>"; }
		  
		  
		  ?>
          </div>
        </section>
        <br>
        <section> 
          <h3> Rate your experience mask </h3>
		  <form action="ratebusinessesmask2.php" method="post">
		      <select name="rating" id="rating">
		        <option value="1">1</option>
		        <option value="2">2</option>
		        <option value="3">3</option>
		        <option value="4">4</option>
		        <option value="5">5</option>
		      </select>
			  <br>
		      <input type="submit" value="Submit">
		  </form>
		   <h3> Rate your experience distance </h3>
		  <form action="ratebusinessesdistance2.php" method="post">
		      <select name="rating" id="rating">
		        <option value="1">1</option>
		        <option value="2">2</option>
		        <option value="3">3</option>
		        <option value="4">4</option>
		        <option value="5">5</option>
		      </select>
			  <br>
		      <input type="submit" value="Submit">
		  </form>
		   <h3> Rate your experience sanitation </h3>
		  <form action="ratebusinessessanitation2.php" method="post">
		      <select name="rating" id="rating">
		        <option value="1">1</option>
		        <option value="2">2</option>
		        <option value="3">3</option>
		        <option value="4">4</option>
		        <option value="5">5</option>
		      </select>
			  <br>
		      <input type="submit" value="Submit">
			  
			    <br>  <br>
			  <br>
			  <a href="browse.php" id="" title="browse">Back to Browse</a>
		  </form>
    </section>
  </body>
</html>