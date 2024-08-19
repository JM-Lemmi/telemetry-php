<html>
<head>
    <title>Report - Overview</title>
</head>

<body>

<h1>Unique instances in the last 6 months</h1>
<?php
// Read the CSV file
$csvData = file_get_contents('./data.csv');

// Parse the CSV data
$lines = explode("\n", $csvData);
$headers = str_getcsv(array_shift($lines));

$i = 0;
$data = [];
foreach ($lines as $line) {
    $row = str_getcsv($line);
    if ($row[0] >= strtotime('-6 months')) {
        array_push($data, $row[2]);
    }
}

// Get the unique names
$uniqueNames = array_unique($data);

// Get the count of unique names
$uniqueNamesCount = count($uniqueNames);

// Output the result
echo "Number of unique names in the last 6 months: " . $uniqueNamesCount;
?>
