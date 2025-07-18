<?php
require_once 'db.php';
require_once 'users.php';

$users = getAllUsers($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
</head>
<body>
    <h2>User List</h2>
    <ul>
        <?php foreach ($users as $user): ?>
            <li><strong><?= htmlspecialchars($user['name']) ?></strong> (<?= htmlspecialchars($user['email']) ?>)</li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
