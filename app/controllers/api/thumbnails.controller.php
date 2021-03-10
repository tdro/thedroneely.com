<?php
/**
 * Update Thumbnails
 */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo $updateTumbnails = shell_exec('../bootstrap/helpers/thumbnails');
}
