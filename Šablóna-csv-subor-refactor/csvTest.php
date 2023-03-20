<?php
$menu = [
    'home' => [
        'path' => 'index.php',
        'name' => 'Domov',
    ],
    'portfolio' => [
        'path' => 'portfolio.php',
        'name' => 'Portfólio',
    ],
    'faq' => [
        'path' => 'qna.php',
        'name' => 'Q&A',
    ],
    'contact' => [
        'path' => 'kontakt.php',
        'name' => 'Kontakt',
    ],
];

$fp = fopen('source/csvHeaderMenu.csv', 'w');



// Write the data rows
foreach ($menu as $item) {
    fputcsv($fp, $item);
}

// Close the file
fclose($fp);





?>