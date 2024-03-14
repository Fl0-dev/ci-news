</main>
<footer class="py-24 bg-primary mt-10 w-full">
    <div class="container">
        <div class=" text-center">
            <div class="text-white" role="contentinfo">
                &copy; Copyright <?= date('Y') ?> - Tous droits réservés<br>
            </div>

        </div>
    </div>
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