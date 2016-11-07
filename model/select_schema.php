<?php
$result = $mysqli->query("SELECT * FROM scheme ORDER BY `Date`");
$result = convertResultToArray($result);