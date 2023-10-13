<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <style>
        /* Sidebar Styles */
        .sidebar {
            width: 250px;
            background-color: #333;
            color: #fff;
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            overflow-y: auto;
        }

        .sidebar a {
            display: block;
            padding: 15px;
            text-decoration: none;
            color: #fff;
        }

        .sidebar a:hover {
            background-color: #555;
        }

        /* Content Area Styles */
        .content {
            margin-left: 250px;
            padding: 20px;
        }
    </style>
</head>
<body>
<div class="sidebar">
    <h2>User Dashboard</h2>
    <a href="#">Dashboard</a>
    <a href="#">Users</a>
    <a href="#">Products</a>
    <a href="#">Orders</a>
    <a href="#">Settings</a>
</div>
<div class="content">
    <h1>Welcome to the User Dashboard</h1>
    <!-- Add your dashboard content here -->
</div>
</body>
</html>
