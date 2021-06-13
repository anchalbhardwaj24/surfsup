<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Black Panthers</title>
   <link rel="stylesheet" href="css/main.css" />
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
    <img class="parallax" src = "mainpage.png">
	
	
		</div>

    <form action="uploadbusiness.php" method="post">
        <p>
			<div class="row uniform 50%">
				<div class="6u 12u$(xsmall)">
           		 	<label for="name">Name of business:</label>
           		 	<input type="text" name="name"
				</div>
		</div>
        </p>
        <p>
			<div class="row uniform 50%">
				<div class="6u 12u$(xsmall)">
          		 	<label for="address">Address:</label>
					<h1> HIII</p>
           			 <input type="text" name="address" style = "width:100%">
				 </div>
		</div>
        </p>
        <p>
            <label for="type">Type of business</label>
			<div class="12u$">
            <input type="text" name="type" id="type">
			</div>
        </p>
        <input type="submit" value="Submit">
    </form>
  </body>
</html>
