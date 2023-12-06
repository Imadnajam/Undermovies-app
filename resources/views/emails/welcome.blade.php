<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to | Undermovies</title>
</head>
<body>
    <img src="{{ $logoSrc }}" alt="Undermovies Logo">

    
     <!-- About Section -->
     <section style="background-color: #f4f4f4; padding: 20px;">
        <h1>About Our Movie & Series Streaming Web Application</h1>
        <p>Welcome to our Movie & Series Streaming Web Application . This web application allows users to stream and enjoy a wide range of films and series. It is designed to be user-friendly, secure, and scalable.</p>
        <p>Explore our vast collection of movies and series, and immerse yourself in a world of entertainment.</p>
    </section>
    
    <section style="background-color: hsl(249, 98%, 67%); padding: 20px; ;color:#ffffff">
      
    <p>Hello <strong>{{ $user->name }}</strong> ,</p>

    <p>Thank you for joining us! We're excited to have you on board.</p>

    <p>
        To get started, please click the following link to go to your home page:
        <a href="{{ route('home') }}">Go to Home <i class="fas fa-home"></i></a>
    </p>

    <p>If you have any questions or need assistance, feel free to contact us <i class="fas fa-envelope"></i>.</p>

    <p>Best regards,<br>Your Website Team</p></section>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>

</body>
</html>
