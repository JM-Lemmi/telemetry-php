<?php
// Get the parameters from the URL
$param1 = $_GET['version'];
$param2 = $_GET['name'];
$param3 = $_GET['litemode'];

// Append the parameters to the data file
// Get the current Unix timestamp
$timestamp = time();
$data = "$timestamp, $param1, $param2, $param3\n";
$file = './data.csv';
file_put_contents($file, $data, FILE_APPEND);

// Output a success message
echo "OK";
?>