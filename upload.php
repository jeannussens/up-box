<!DOCTYPE html>
<html>

  <head>
  
	<script type='text/javascript' src='http://code.jquery.com/jquery-1.11.1.min.js'></script>
	<script src="http://malsup.github.com/jquery.form.js"></script> 
	<script src='ajax.js'></script>
  
    
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
          <li><a href="#">Share!</a></li>
        </ul>
      </div>
    </div>

    <div class="jumbotron">
      <div class="container">
        <h1>Share-Able!</h1>
        <p>Share your videos and pictures over the internet.</p>
      </div>
    </div> 
    
    <div class="learn-more">
	  <div class="container">
		<div class='row'>
	      <div class='col-md-8'>
			<h3>Upload</h3>
			<p>You can upload pictures and videos, name them what ever pleases you and get likes from other people around the world.</p>
			<div class="form-group">
				<form action="up.php" method="post" id='imgForm' enctype="multipart/form-data">
					<label for="file">File:</label>
					<input type="file" name="file" id="file"><br />
					<input class='btn btn-success' id='btn' type="submit" name="submit" value="Share It!">
					<br><br><div style='display:none;' id='targetResult' class="alert alert-success" role="alert"></div>
				</form>
			</div>
	      </div>
		  <div class='col-md-4'>
			<h3>It's Free!</h3>
			<p>You don't need to pay for nothing, just take a picture or video and upload it!</p>
		  </div>
	    </div>
	  </div>
	</div>
  </body>
</html>