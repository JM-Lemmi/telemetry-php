<html>
<head>
    <title>Report - All</title>
</head>
<body>

    <?php
    // Path to the CSV file
    $csvFile = './data.csv';

    // Read the CSV file
    $csvData = file_get_contents($csvFile);

    // Parse the CSV data
    $rows = explode("\n", $csvData);
    $table = '<table>';

    foreach ($rows as $row) {
        $table .= '<tr>';

        $columns = explode(',', $row);
        foreach ($columns as $column) {
            $table .= '<td>' . $column . '</td>';
        }

        $table .= '</tr>';
    }

    $table .= '</table>';

    // Display the table
    echo $table;
    ?>

</body>