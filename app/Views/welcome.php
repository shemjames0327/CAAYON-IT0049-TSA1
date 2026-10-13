<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - Today's Tasks</title>
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
        <h2 class="mb-3">Today's Tasks</h2>
        <div class="card shadow-sm">
            <div class="card-body p-0">
                <table class="table table-hover mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th>Title</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(!empty($tasks)): ?>
                            <?php foreach ($tasks as $task): ?>
                                <tr>
                                    <td><?= esc($task['title']) ?></td>
                                    <td>
                                        <span class="badge <?= $task['status'] === 'completed' ? 'bg-success' : 'bg-warning text-dark' ?>">
                                            <?= esc(ucfirst($task['status'])) ?>
                                        </span>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="2" class="text-center text-muted py-3">No tasks scheduled for today.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>