<?php

/**
 * Helper Functions
 */

function featherIcon($name) {
  echo file_get_contents(
    $_SERVER['DOCUMENT_ROOT']
    . '/..' . '/public/css/fonts/feather-icons/' . $name . '.svg'
  );
}

function base64($path) {
  echo base64_encode(
    file_get_contents($_SERVER['DOCUMENT_ROOT']
    . '/..' . $path
    )
  );
}
