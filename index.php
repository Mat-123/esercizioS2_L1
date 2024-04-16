<?php

include_once __DIR__ . '/includes/init.php';

include __DIR__ . '/includes/html.php';

include __DIR__ . '/includes/navbar.php';

include __DIR__ . '/includes/container.php'; ?>

<div class="card">
    <div class="card-body">
        <?php
        echo ('Benvenuto, ' . $user_from_db["username"] . '!');
        ?>
    </div>
</div>

<?php

include __DIR__ . '/includes/end.php';
