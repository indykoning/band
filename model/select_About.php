<?php

$result = $mysqli->query("SELECT * FROM about");
$result = convertResultToArray($result);