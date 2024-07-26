<?php
header('Content-Type: application/json');

$cities = [
    'CA' => [
        ['code' => 'LA', 'name' => 'Los Angeles'],
        ['code' => 'SF', 'name' => 'San Francisco']
    ],
    'NY' => [
        ['code' => 'NYC', 'name' => 'New York City'],
        ['code' => 'BUF', 'name' => 'Buffalo']
    ],
    'ON' => [
        ['code' => 'TOR', 'name' => 'Toronto'],
        ['code' => 'OTT', 'name' => 'Ottawa']
    ],
    'QC' => [
        ['code' => 'MTL', 'name' => 'Montreal'],
        ['code' => 'QUE', 'name' => 'Quebec City']
    ]
];

$stateCode = $_GET['state'] ?? '';

if (isset($cities[$stateCode])) {
    echo json_encode(['cities' => $cities[$stateCode]]);
} else {
    echo json_encode(['cities' => []]);
}
?>
