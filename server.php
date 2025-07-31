<?php
$json_string = file_get_contents('./musicRecords.json');
$musicRecords = json_decode($json_string, true);
// echo "<pre>";
// var_dump($musicRecords);
// echo "</pre>";
