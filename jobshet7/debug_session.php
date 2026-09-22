<?php
session_start();

$page_title = "Debug Session";
include __DIR__ . '/includes/header.php';
?>
        <section>
            <h2>Isi $_SESSION saat ini</h2>
            <p>Session ID: <code><?php echo session_id(); ?></code></p>
            <pre><?php print_r($_SESSION); ?></pre>
        </section>
<?php include __DIR__ . '/includes/footer.php'; ?>