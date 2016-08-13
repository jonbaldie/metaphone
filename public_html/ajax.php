<?php

header('Content-type: application/json');

echo json_encode([
    'metaphone' => metaphone($_REQUEST['request'])
]);