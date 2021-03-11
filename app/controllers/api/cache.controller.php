<?php
/**
 * Invalidate cache
 */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo $cacheBust = shell_exec('../bootstrap/helpers/cache 2>&1');
}
