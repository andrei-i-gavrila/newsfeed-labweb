<?php if (isset($_SESSION['errors'])) {
    foreach ($_SESSION['errors'] as $error) {
        echo '<div class="notification is-danger"><button class="delete"></button>' . $error . '</div>';
    }
    unset($_SESSION['errors']);
} ?>

<?php if (isset($_SESSION['messages'])) {
    foreach ($_SESSION['messages'] as $message) {
        echo '<div class="notification is-success"><button class="delete"></button>' . $message . '</div>';
    }
    unset($_SESSION['messages']);
} ?>
</div>

<script
        src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>

<script src="/assets/script.js"></script>
</body>
</html>