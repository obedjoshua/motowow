<?php
require_once __DIR__ . '/../lib/google-api-php-client--PHP8.1/vendor/autoload.php';
require_once __DIR__ . '/../config/config.php';

$client = new Google_Client();
$client->setClientId(GOOGLE_CLIENT_ID);
$client->setClientSecret(GOOGLE_CLIENT_SECRET);
$client->setRedirectUri(GOOGLE_REDIRECT_URI);

if (isset($_GET['error'])) {
    die("Error from Google: " . htmlspecialchars($_GET['error']));
}

if (!isset($_GET['state']) || $_GET['state'] !== $_SESSION['oauth_state']) {
    die("Invalid OAuth state. Potential cross-site request forgery attempt.");
}
unset($_SESSION['oauth_state']);

if (!isset($_GET['code'])) {
    die("Authorization code not returned from Google.");
}

try {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    if (isset($token['error'])) die("Error exchanging code: " . htmlspecialchars($token['error']));
    if (!$token) die("Could not retrieve access token.");
    $client->setAccessToken($token);
} catch (Exception $e) {
    die("Exception exchanging code: " . htmlspecialchars($e->getMessage()));
}

if (isset($token['id_token'])) {
    try {
        $payload = $client->verifyIdToken($token['id_token']);
        if ($payload) {
            $google_id = $payload['sub'];
            $email = $payload['email'];
            $full_name = $payload['name'];

            // Determine if the user is an admin based on the list in config.php
            $is_admin = in_array($email, $admin_emails);

            $_SESSION['user_data'] = [
                'name' => $full_name,
                'email' => $email,
                'google_id' => $google_id,
                'is_admin' => $is_admin
            ];

            header('Location: dashboard-user.php');
            exit;
        } else {
            die("ID token verification failed.");
        }
    } catch (Exception $e) {
        die("ID Token Error: " . htmlspecialchars($e->getMessage()));
    }
} else {
    die("ID token not found in the access token.");
}
?>