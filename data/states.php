<?php
header('Content-Type: application/json');

$states = [
    'US' => [
        ['code' => 'CA', 'name' => 'California'],
        ['code' => 'NY', 'name' => 'New York']
    ],
    'CA' => [
        ['code' => 'ON', 'name' => 'Ontario'],
        ['code' => 'QC', 'name' => 'Quebec']
    ]
];

$countryCode = $_GET['country'] ?? '';

if (isset($states[$countryCode])) {
    echo json_encode(['states' => $states[$countryCode]]);
} else {
    echo json_encode(['states' => []]);
}
?>
