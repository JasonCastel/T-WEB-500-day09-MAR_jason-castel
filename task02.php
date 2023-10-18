<?php
function render_body($page) {
    $allowedPages = ['home', 'php', 'sql'];

    if (in_array($page, $allowedPages)) {
        $filePath = __DIR__ . '/' . $page . '.html';

        if (file_exists($filePath)) {
            return file_get_contents($filePath);
        } else {
            return '<p>Page not found</p>';
        }
    } else {
        return '<p>Unknown page</p>';
    }
}
?>
