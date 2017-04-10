<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<link rel="stylesheet" type="text/css" href="script.js" />
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

	<body>
		<div class="container">
			<h1>Back panel</h1>

			<div class="row">
				<div class="col-lg-3">
					<ul id="admin_tabs" class=" nav nav-pills nav-stacked">
						<li class="active"><a href="#add_post">Add new post</a></li>
						<li><a href="#menu1">Menu 2</a></li>
						<li><a href="#menu2">Menu 3</a></li>
					</ul>
				</div>
				<div class="col-lg-9">
					<div class="tab-content">
					  	<div id="add_post" class="tab-pane fade in active">
					    	<?php addNewPost() ?>
					    	<h2>Add new post</h2>
							<form method="POST">
								<div class="form-group">
									<input class="form-control" type="text" name="id" placeholder="Id" />
							  	</div>
							  	<div class="form-group">
									<input class="form-control" type="date" name="date" placeholder="Date" />
							  	</div>
								<div class="form-group">
									<input class="form-control" type="text" name="name" placeholder="Title" />
							  	</div>
							  	<div class="form-group">
									<input class="form-control" type="text" name="post_image" placeholder="Image" />
							  	</div>
								<div class="form-group">
									<textarea class="form-control" type="text" name="full_text" placeholder="Text" /></textarea>
								</div>
								<div class="form-group">
									<input class="form-control" type="text" name="excerpt" placeholder="Excerpt" />
								</div>
								<div class="form-group">
									<input class="form-control" type="text" name="author" placeholder="Author" />
								</div>
								<div class="form-group">

								</div>
								<input class="btn btn-primary" type="submit" value="Add">
							</form>
					  	</div>
					  	<div id="menu1" class="tab-pane fade">
					    	<h3>Menu 1</h3>
					    	<p>Some content in menu 1.</p>
					  	</div>
					  	<div id="menu2" class="tab-pane fade">
					    	<h3>Menu 2</h3>
					    	<p>Some content in menu 2.</p>
					  	</div>
					</div>
				</div>
			</div>
		</div>
	</body>
	
	<!-- scripts for nav tabs -->
	<script>
	$('#admin_tabs a').click(function (e) {
  		e.preventDefault()
  		$(this).tab('show')
	}); 
	</script>
</html>
 
 
