
<?php
require_once __DIR__ . '/config/database.php';

try {
    db();
    echo "Database connected successfully!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
