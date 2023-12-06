<!-- resources/views/emails/welcome.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Your Website</title>
</head>
<body>
    <p>Hello {{ $user->name }},</p>

    <p>Thank you for joining us! We're excited to have you on board.</p>

    <p>
        To get started, please click the following link to go to your home page:
        <a href="{{ route('home') }}">Go to Home</a>
    </p>

    <p>If you have any questions or need assistance, feel free to contact us.</p>

    <p>Best regards,<br>Your Website Team</p>
</body>
</html>
