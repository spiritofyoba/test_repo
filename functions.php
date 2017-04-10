<?php
function ShowPosts() {
	$sql = "SELECT * FROM posts";

	$result = getResults($sql);

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

function addNewPost() {
	$result = getResults($sql);

	

}
