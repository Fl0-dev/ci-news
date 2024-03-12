<footer>

</footer>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggleButton = document.querySelector('[data-collapse-toggle="navbar-default"]');
        const menu = document.getElementById('navbar-default');
        toggleButton.addEventListener('click', function() {
            const isExpanded = toggleButton.getAttribute('aria-expanded') === 'true' || false;
            toggleButton.setAttribute('aria-expanded', !isExpanded);
            menu.classList.toggle('hidden');
        });
    });
</script>

</body>

</html>