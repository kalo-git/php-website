
<!-- footer.php -->
<footer class="bg-light text-center p-3 mt-4">
    <p>&copy; <?php echo date("Y"); ?> Your Company. All Rights Reserved.</p>
    <p>Follow us on:
        <a href="https://facebook.com" target="_blank">Facebook</a> |
        <a href="https://twitter.com" target="_blank">Twitter</a> |
        <a href="https://linkedin.com" target="_blank">LinkedIn</a>
    </p>
</footer>
<!-- Bootstrap JS and dependencies -->
<?php 
$bootstrap_js = get_bootstrap_cdn('js');
foreach ($bootstrap_js as $js) {
    echo "<script src=\"$js\"></script>";
}
?>
</body>
</html>
