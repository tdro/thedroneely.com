<?php
/**
 * Update Thumbnails
 */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $updateTumbnails = shell_exec('../bootstrap/helpers/update-thumbnails');
    echo '<pre>' . $updateTumbnails . '</pre>';
}
