<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
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

        .login-container {
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            padding: 20px;
            width: 300px;
            text-align: center;
        }

        .login-container h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .login-container form input[type="text"],
        .login-container form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .login-container form button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 3px;
            padding: 10px 20px;
            cursor: pointer;
            margin-top: 10px;
        }

        .login-container form button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<div class="login-container">
    <h2>Login</h2>
    <form action="{{route('user.login')}}" method="POST">@csrf
        <input id="email" type="text" name="email" placeholder="Email" required>@if($errors->has('email'))
            <div class="text-danger">{{ $errors->first('email') }}</div>@endif


        <input placeholder="Password" required type="password" name="password">@if($errors->has('password'))
            <div class="text-danger">{{ $errors->first('password') }}</div>@endif

        <button type="submit">Login</button>
        <a href="{{ route('user.registration') }}" class="btn btn-primary">Sign Up</a>

    </form>
</div>
</body>
</html>
