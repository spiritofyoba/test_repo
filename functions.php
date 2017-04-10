<?php
//
// Show posts on page function
//
function ShowPosts() {
	$sql = "SELECT * FROM posts";

	$conn = getDBConnect($sql);
	$result = $conn->query($sql);
	if ( $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) { ?>
        <div class="col-lg-3"> 
        <?php
        echo "<h2>".$row["name"]."</h2>";
        if(isset($row["post_image"])&&!empty($row["post_image"])) {
        	echo '<img class="img-responsive" src='.$row["post_image"].' />';
        } else {
        	echo '<img class="img-responsive" src="/img/qwe.png" />';
        }

        echo "<p>"."<span>".$row['date']."</span>"."<span>".$row['author']."</span>"."</p>";
        
        if(isset($row["excerpt"])&&!empty($row['excerpt'])) {
        	echo "<p>".$row['excerpt']."<br /><a>Read more</a></p>";
        } else {
        	echo "<p>".$row['full_text']."<br /><a>Read more</a></p>";
        }
        
        ?>
        </div>
        <?php
    }
	} else {
    	echo "0 results";
 	}
}


//
// Add new post function
//
function addNewPost() {

	$conn = getDBConnect();

	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	} 
	
	if(!isset($_POST) || empty($_POST))
	{
		return;
	}

	$name = ($_POST['name']);
	$post_image = ($_POST['post_image']);
	$date = ($_POST['date']);
	$full_text = ($_POST['full_text']);
	$excerpt = ($_POST['excerpt']);
	$author = ($_POST['author']);

	$form_sql = "INSERT INTO posts (date, name, post_image, full_text, excerpt, author)
		VALUES ( 
			'".$_POST['date']."', 
			'".$_POST['name']."', 
			'".$_POST['post_image']."', 
			'".$_POST['full_text']."', 
			'".$_POST['excerpt']."', 
			'".$_POST['author']."'
		)";
	
	
	if ($conn->query($form_sql) === TRUE) {
    	echo "New record created successfully";
	} else {
    	echo "Error: " . $form_sql . "<br>" . $conn->error;
	}

$conn->close();
}
