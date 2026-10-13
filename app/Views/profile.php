<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('/') ?>">Tasks for Today</a>
            <div class="navbar-nav">
                <a class="nav-link" href="<?= base_url('/') ?>">Welcome</a>
                <a class="nav-link" href="<?= base_url('/tasks') ?>">Task List</a>
                <a class="nav-link" href="<?= base_url('/profile') ?>">Profile</a>
                <a class="nav-link" href="<?= base_url('/about') ?>">About</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <h2 class="mb-3">User Profile</h2>
        <div class="card shadow-sm" style="max-width: 400px;">
            <div class="card-body">
                <?php if ($user): ?>
                    <h4 class="card-title text-primary"><?= esc($user['full_name']) ?></h4>
                    <h6 class="card-subtitle mb-3 text-muted">@<?= esc($user['username']) ?></h6>
                    <ul class="list-group list-group-flush border-top pt-2">
                        <li class="list-group-item px-0"><strong>Email:</strong> <?= esc($user['email']) ?></li>
                        <li class="list-group-item px-0"><strong>Member Since:</strong> <?= esc(date('M j, Y', strtotime($user['created_at']))) ?></li>
                    </ul>
                <?php else: ?>
                    <div class="alert alert-warning mb-0">No user data found.</div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>