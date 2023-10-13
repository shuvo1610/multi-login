<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .registration-container {
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            padding: 20px;
            width: 300px;
            text-align: center;
        }

        .registration-container h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .registration-container form input {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .registration-container form button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 3px;
            padding: 10px 20px;
            cursor: pointer;
            margin-top: 10px;
        }

        .registration-container form button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<div class="registration-container">
    <h2>Register</h2>
    <form action="{{route('user.store')}}" method="POST">@csrf
        <input type="text" name="username" placeholder="Username" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="confirm_password" placeholder="Confirm Password" required>
        <label for="user_type">User Type:</label>
        <select id="user_type" name="user_type">
            <option value="user">User</option>
            <option value="admin">Admin</option>
            <option value="company">Company</option>
        </select>
        <button type="submit">Register</button>
        <a href="{{ route('login') }}" class="btn btn-primary">Back</a>
    </form>
</div>
</body>
</html>
