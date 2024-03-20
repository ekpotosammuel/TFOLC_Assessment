<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .dashboard {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #333;
            color: white;
        }
        .logout-btn {
            background-color: #dc3545;
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        .logout-btn:hover {
            background-color: #c82333;
        }
        .content {
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <h1>Dashboard</h1>
        <a class="logout-btn" href="#">Logout</a>
    </div>
    <div class="content">
        <!-- Your dashboard content here -->
        <p>Welcome to Hompage !!</p>
    </div>
</body>
</html>
