
<script src="{{ asset('js/home.js') }}"></script>
<script>
    var backgroundList = @json($list);
    var heroSection = document.getElementById('hero');

    function changeBackground() {
        var currentIndex = backgroundList.indexOf(heroSection.style.backgroundImage.split('/').pop().replace('")', ''));
        var nextIndex = (currentIndex + 1) % backgroundList.length;
        heroSection.style.backgroundImage = 'url(' + "{{ asset('image/home/') }}/" + backgroundList[nextIndex] + ')';
    }
    setInterval(changeBackground, 20000);
</script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>