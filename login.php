<?php

include_once __DIR__ . '/includes/init.php';

$user = [];
$user['username'] = $_POST['username'] ?? '';
$user['password'] = $_POST['password'] ?? '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare("
        SELECT * FROM users
        WHERE username = :username;
    ");

    $stmt->execute([
        'username' => $_POST['username'],
    ]);

    $user_from_db = $stmt->fetch();

    if ($user_from_db) {
        if (password_verify($_POST['password'], $user_from_db["password"])) {
            $_SESSION['user_id'] = $user_from_db['id'];
            header('Location: index.php');
            exit;
        };
    }

    $errors['credentials'] = 'Credenziali non valide';
}


include __DIR__ . '/includes/html.php';

include __DIR__ . '/includes/navbar.php';

include __DIR__ . '/includes/container.php'; ?>

<form action="" method="POST" novalidate>
    <legend class="mx-auto">Log In</legend>
    <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username" value="<?= $user['username'] ?>">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" value="">
    </div>
    <button type="submit" class="btn btn-primary">Log In</button>
</form>

<?php

include __DIR__ . '/includes/end.php';
