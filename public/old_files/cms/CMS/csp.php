<?php
$unique_nonce=bin2hex(random_bytes(32 / 2));

/*if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === 'off') {
    $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('Location: ' . $redirect);
    exit;
}
header('Strict-Transport-Security: max-age=31536000; includeSubDomains; preload');

// Prevent clickjacking
header('X-Frame-Options: SAMEORIGIN');

// Prevent MIME type sniffing
header('X-Content-Type-Options: nosniff');

// Control referrer information
header('Referrer-Policy: strict-origin-when-cross-origin');

// Control feature usage
header("Permissions-Policy: geolocation=(self), microphone=(), camera=(), fullscreen=(self), payment=(self)");

header("Content-Security-Policy: default-src 'self'; script-src 'self' 'nonce-$unique_nonce' https://cdnjs.cloudflare.com https://cdn.jsdelivr.net http://cdn.jsdelivr.net/npm/sweetalert2@11; style-src 'self' 'unsafe-inline' https://cdn.jsdelivr.net https://fonts.googleapis.com https://cdnjs.cloudflare.com; font-src 'self' https://fonts.gstatic.com; object-src 'none'; img-src 'self' data:; connect-src 'self'; require-trusted-types-for 'script'");*/
?>