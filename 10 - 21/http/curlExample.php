<?php
header('Content-Type: application/json');

echo json_encode([
    'id' => 1,
    'name' => 'paper',
    'price' => 3
]);