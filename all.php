<?php
	include_once 'connect.php';
	
	$query = "SELECT img FROM uploads";
	$resultQuery = $mysqli->query($query);
?>

<!-- TODO 08/01 = LOGIN/REGISTER SYSTEM FOR UPLOAD SYSTEM :) -->

<!DOCTYPE html>
<html>

  <head>
    <link href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/shift.css" rel="stylesheet">
    
    <link rel="stylesheet" href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    
  </head>

  <body>
    <div class="nav">
      <div class="container">
        <ul class='pull-left'>
          <li><a href="#">Share-able</a></li>
          <li><a href="#">Browse</a></li>
        </ul>
        <ul class='pull-right'>
          <li><a href="upload.php">Share!</a></li>
        </ul>
      </div>
    </div>

    <div class="jumbotron">
      <div class="container">
        <h1>Share-Able!</h1>
        <p>Share your videos and pictures over the internet.</p>
      </div>
    </div> 
    
    <div class='neighborhood-guides'>
        <div class='container'>
            <h2>Uploads</h2>
            <p>Here's all the uploads that we have:</p>
            <div class='row'>
				<?php while($row = $resultQuery->fetch_assoc()): ?>
                <div class='col-md-4'>
                    <div class='thumbnail'>
                        <img src="<?php echo $row['img']; ?>" />
                    </div>
                </div>
				<?php endwhile; ?>
            </div>
        </div>
    </div>
  </body>
</html>