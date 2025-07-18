<?php
require_once 'db.php';

function getAllUsers($conn) {
    $sql = "SELECT id, name, email FROM users";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>
