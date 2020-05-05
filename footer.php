<footer>
    <h2>Footer</h2>
    <p>
        &copy;
        <?php echo date('Y'); ?>
        Bassam Jallouli
    </p>
    <?php if ( function_exists('output_hello_world')): ?>
    <aside>
        <?php output_hello_world(); ?>
    </aside>
    <?php endif; ?>
</footer>
<?php wp_footer(); ?>
</body>
</html>