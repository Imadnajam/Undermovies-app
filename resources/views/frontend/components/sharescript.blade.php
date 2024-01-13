<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get the WhatsApp and Facebook share buttons
        const whatsappShareButton = document.getElementById('whatsappShare');
        const facebookShareButton = document.getElementById('facebookShare');

        // Check if the WhatsApp share button exists
        if (whatsappShareButton) {
            // Add a click event listener to the WhatsApp share button
            whatsappShareButton.addEventListener('click', function() {
                // Generate the sharing message based on movie details
                const shareMessage = `${movieData['original_title']} - ${movieData['overview']}\n${window.location.href}`;

                // Open the WhatsApp sharing link with the message
                const whatsappLink = `https://wa.me/?text=${encodeURIComponent(shareMessage)}`;

                // Open the link in a new window
                window.open(whatsappLink, '_blank');
            });
        } else {
            console.error('WhatsApp share button not found.');
        }

        // Check if the Facebook share button exists
        if (facebookShareButton) {
            // Add a click event listener to the Facebook share button
            facebookShareButton.addEventListener('click', function() {
                // Generate the sharing link based on your movie details
                const shareLink = window.location.href;

                // Open the Facebook sharing link in a new window
                const facebookLink = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(shareLink)}`;
                window.open(facebookLink, '_blank');
            });
        } else {
            console.error('Facebook share button not found.');
        }
    });
</script>
