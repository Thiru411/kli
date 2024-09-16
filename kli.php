<?php

function extractLinks($text) {
    $pattern = '/https?:\/\/[^\s]+/';
    preg_match_all($pattern, $text, $matches);
    return $matches[0];
}

function readCsvAndExtractLinks($filePath) {
    $file = fopen($filePath, 'r');
    $extractedLinks = [];

    while (($row = fgetcsv($file)) !== false) {
        foreach ($row as $cell) {
            $links = extractLinks($cell);
            if (!empty($links)) {
                $extractedLinks = array_merge($extractedLinks, $links);
            }
        }
    }

    fclose($file);
    return $extractedLinks;
}

$filePath = 'csvfile.csv'; // Update this path to your actual CSV file
$links = readCsvAndExtractLinks($filePath);

// Print extracted links
foreach ($links as $link) {
    echo $link . "\n";
}

?>
