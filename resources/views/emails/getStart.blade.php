<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Undermovies</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        img {
            max-width: 150px;
            margin-bottom: 20px;
        }

        h1 {
            color: #007bff;
            margin-bottom: 10px;
        }

        p {
            font-size: 16px;
            line-height: 1.6;
            color: #555;
        }

        a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="{{ $message->embed(public_path('image/home/logo.png')) }}" alt="Logo">
        <h1>About Our Movie & Series Streaming Web Application</h1>
        <p>Welcome to our Movie & Series Streaming Web Application. This platform allows users to stream and enjoy a diverse collection of films and series in a user-friendly, secure, and scalable environment.</p>
        <p>Explore our vast catalog of movies and series, and immerse yourself in a world of entertainment.</p>
        <p>Visit our <a href="{{ url('/') }}" target="_blank">website</a> to get started!</p>
    </div>
</body>
</html>
