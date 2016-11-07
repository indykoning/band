<?php
$pagenumber = (isset($_GET['pageNumber'])) ? $_GET['pageNumber'] : '1';
$start_item = (ITEMS_PER_PAGE * $pagenumber - ITEMS_PER_PAGE);
$sql = "SELECT * FROM newsarticles ORDER BY `date_created` DESC LIMIT " . $start_item . " , " . ITEMS_PER_PAGE;
$result = $mysqli->query($sql);
$result = convertResultToArray($result);

//berekening hoeveel knoppen
$result2 = $mysqli->query("SELECT * FROM newsarticles");
$count = $result2->num_rows;
$count = ceil($count / ITEMS_PER_PAGE);

$templateParser->assign('pages', $count);