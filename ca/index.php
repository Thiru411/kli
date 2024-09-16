<?php

// Path to your CSV file
$csvFile = 'ca.csv';

// Read data from the CSV file
if (($handle = fopen($csvFile, 'r')) !== FALSE) {
    // Initialize an empty array to store the data
    $data = [];

    // Read each row from the CSV file
    while (($row = fgetcsv($handle, 1000, ',')) !== FALSE) {
        // Add the row to the data array
        $data[] = $row;
    }

    // Close the file handle
    fclose($handle);
}

// Generate HTML table dynamically
$html = '<table border="1">';
$html .= '<thead><tr>';

// Output table headers
foreach ($data[0] as $header) {
    $html .= '<th>' . $header . '</th>';
}

$html .= '</tr></thead><tbody>';

// Output table rows
for ($i = 1; $i < count($data); $i++) {
    $html .= '<tr>';
    foreach ($data[$i] as $cell) {
        $html .= '<td>' . $cell . '</td>';
    }
    $html .= '</tr>';
}

$html .= '</tbody></table>';

// Set the appropriate headers for file download
header('Content-Type: text/html');
header('Content-Disposition: attachment; filename="output.html"');

// Output HTML content
echo $html;
