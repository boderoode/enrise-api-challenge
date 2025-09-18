<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Application</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
            text-align: center;
        }
        .container {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin: 20px 0;
        }
        .btn {
            background: #007bff;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            margin: 10px;
            font-size: 16px;
        }
        .btn:hover {
            background: #0056b3;
        }
        h1 {
            color: #333;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Laravel</h1>
        <p>Your Laravel application is running successfully!</p>
        
        <a href="{{ route('jokes.five') }}" class="btn">View 5 Chuck Norris Jokes</a>
        <a href="{{ route('jokes.twelve') }}" class="btn">View 12 Chuck Norris Jokes</a>
    </div>
</body>
</html>
