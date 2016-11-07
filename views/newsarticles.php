<?php

echo '<section>';

//fetch_assoc should not be in the view!

foreach ($result as $newsItem => $oneItem) {
	
	echo '<article>';
	echo '<h1>'.$oneItem['title'].'</h1>';
	echo "<img src='images/" . $oneItem['image'] . "' height='300'><br>";
	echo '<content>'.$oneItem['content'].'</content>';
	echo '<p>'.$oneItem['date_created'].'</p>';
	echo '</article>';
}

echo '</section>';