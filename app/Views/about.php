<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
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
        <h2 class="mb-3">About the Developer</h2>
        <div class="card shadow-sm" style="max-width: 500px;">
            <div class="card-body">
                <table class="table table-borderless mb-0">
                    <tbody>
                        <tr>
                            <th scope="row" class="text-end w-25">Student Name:</th>
                            <td>Caayon, Shem James D.</td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-end">Section:</th>
                            <td>TB32</td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-end">Professor:</th>
                            <td>Mr. Joseph Calleja</td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-end">System:</th>
                            <td>Tasks for Today Management System</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>