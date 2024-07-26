<?php
header('Content-Type: application/json');

$countries = [
    ['code' => 'US', 'name' => 'USA'],
    ['code' => 'CA', 'name' => 'Canada']
];

echo json_encode(['countries' => $countries]);
?>