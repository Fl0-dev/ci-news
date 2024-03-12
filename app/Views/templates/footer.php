<em>&copy; 2024</em>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Sélectionner le bouton et le menu
        const toggleButton = document.querySelector('[data-collapse-toggle="navbar-default"]');
        const menu = document.getElementById('navbar-default');

        // Ajouter un écouteur d'événement de clic sur le bouton
        toggleButton.addEventListener('click', function() {
            const isExpanded = toggleButton.getAttribute('aria-expanded') === 'true' || false;
            // Basculer l'attribut aria-expanded
            toggleButton.setAttribute('aria-expanded', !isExpanded);
            // Basculer la classe "hidden" du menu pour le montrer ou le cacher
            menu.classList.toggle('hidden');
        });
    });
</script>
</body>

</html>