<?php
require_once __DIR__ . '/config/database.php';

$newPassword = 'LantawAdmin123!';
$hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

$stmt = db()->prepare(
    "UPDATE users SET password_hash = ? WHERE id = 1"
);

$stmt->execute([$hashedPassword]);

echo "Admin password successfully reset!";