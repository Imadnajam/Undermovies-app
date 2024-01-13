<script>
    document.addEventListener('DOMContentLoaded', function() {
     // Get the WhatsApp and Facebook share buttons
     const whatsappShareButton = document.getElementById('whatsappShare');
     const facebookShareButton = document.getElementById('facebookShare');
 
     // Add a click event listener to the WhatsApp share button
     whatsappShareButton.addEventListener('click', function() {
         // Generate the sharing message based on your movie details
         const shareMessage = `${$movie['original_title']} - ${$movie['overview']}\n${window.location.href}`;
 
         // Open the WhatsApp sharing link with the message
         const whatsappLink = `https://wa.me/?text=${encodeURIComponent(shareMessage)}`;
         window.open(whatsappLink, '_blank');
     });
 
     // Add a click event listener to the Facebook share button
     facebookShareButton.addEventListener('click', function() {
         // Generate the sharing link based on your movie details
         const shareLink = window.location.href; // You can customize this based on your requirements
 
         // Open the Facebook sharing link
         const facebookLink =
             `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(shareLink)}`;
         window.open(facebookLink, '_blank');
     });
 });
 
 </script>