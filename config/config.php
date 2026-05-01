<?php

define('GOOGLE_CLIENT_ID', '');
define('GOOGLE_CLIENT_SECRET', '');
define('GOOGLE_REDIRECT_URI', 'http://localhost/demo1/auth/callback.php');

$admin_emails = [
    'obeddanieljoshua@gmail.com', 
];

// Start the session globally
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>