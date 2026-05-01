<?php
require_once __DIR__ . '/../lib/google-api-php-client--PHP8.1/vendor/autoload.php';
require_once __DIR__ . '/../config/config.php';

// If already logged in, redirect to dashboard
if (isset($_SESSION['user_data'])) {
    header('Location: dashboard.php');
    exit;
}

// Set up Google Client
$client = new Google_Client();
$client->setClientId(GOOGLE_CLIENT_ID);
$client->setClientSecret(GOOGLE_CLIENT_SECRET);
$client->setRedirectUri(GOOGLE_REDIRECT_URI);
$client->addScope("email");
$client->addScope("profile");

// Create a safe state token to prevent CSRF
$state = bin2hex(random_bytes(16));
$_SESSION['oauth_state'] = $state;
$client->setState($state);

// Generate the secure login URL
$login_url = $client->createAuthUrl();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in to your account — Motowow</title>
    <link rel="stylesheet" href="../ref/css/main.css?v=<?php echo time(); ?>">
    
    <style>
        /* ── Layout adjustments for Header & Footer ── */
        body {
            background-color: #f7f7f7; /* Matching soft grey from image */
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Forces body to be at least screen height */
            font-family: var(--font-regular, system-ui, sans-serif);
        }

        .login-wrapper {
            flex: 1; /* Allows this wrapper to take up remaining space between header and footer */
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 60px 20px;
        }

        /* ── Exact Login Box Styling ── */
        .login-container {
            width: 100%;
            max-width: 420px;
            text-align: center;
        }

        .main-title {
            font-family: var(--font-caps, 'Impact', system-ui, sans-serif);
            font-size: 2.2rem;
            color: #000000;
            text-transform: uppercase;
            margin-bottom: 30px;
            letter-spacing: -0.01em;
        }

        .btn-google {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 50px;
            background-color: #4285F4;
            border-radius: 4px;
            color: #ffffff;
            font-family: var(--font-bold, system-ui, sans-serif);
            font-size: 1rem;
            text-decoration: none;
            border: none;
            cursor: pointer;
            box-sizing: border-box;
            transition: background-color 0.2s ease;
        }

        .btn-google:hover { background-color: #357ae8; }

        .google-icon-wrapper {
            background-color: #ffffff;
            padding: 10px;
            border-radius: 2px 0 0 2px;
            margin-right: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .btn-google span {
            flex-grow: 1;
            text-align: center;
            margin-right: 35px;
        }

        .or-separator {
            display: flex;
            align-items: center;
            color: #babcbe;
            font-family: var(--font-bold, system-ui, sans-serif);
            margin: 25px 0;
        }

        .or-separator::before, .or-separator::after {
            content: "";
            flex: 1;
            border-bottom: 1px solid #eaeaea;
        }

        .or-separator:not(:empty)::before { margin-right: .5em; }
        .or-separator:not(:empty)::after { margin-left: .5em; }

        .input-group {
            text-align: left;
            margin-bottom: 20px;
        }

        .input-label {
            display: block;
            font-family: var(--font-bold, system-ui, sans-serif);
            font-size: 0.95rem;
            color: #000000;
            margin-bottom: 8px;
        }

        .input-field {
            width: 100%;
            height: 48px;
            padding: 0 15px;
            border: 1px solid #d1d5db;
            border-radius: 4px;
            font-size: 1rem;
            color: #000000;
            box-sizing: border-box;
            font-family: var(--font-regular, system-ui, sans-serif);
        }

        .input-field:focus {
            outline: none;
            border-color: #00E5FF;
            box-shadow: 0 0 0 1px #00E5FF;
        }

        /* ── Cyan Accent color from image ── */
        .btn-login {
            display: block;
            width: 100%;
            height: 50px;
            background-color: #33E9F2; /* Cyan from image_4.png */
            border-radius: 4px;
            color: #000000;
            font-family: var(--font-bold, system-ui, sans-serif);
            font-size: 1rem;
            text-align: center;
            text-decoration: none;
            border: none;
            cursor: pointer;
            line-height: 50px;
            box-sizing: border-box;
            transition: background-color 0.2s ease;
        }

        .btn-login:hover { background-color: #25d4dd; }

        .login-footer {
            margin-top: 35px;
            font-family: var(--font-regular, system-ui, sans-serif);
            font-size: 0.95rem;
            color: #000000;
            line-height: 1.6;
        }

        .login-footer p { margin: 0; }
        .login-footer a {
            color: #000000;
            font-family: var(--font-bold, system-ui, sans-serif);
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div>
        <?php include __DIR__ . '/../includes/header.php'; ?>
    </div>

    <!-- Centered Login Box -->
    <main class="login-wrapper">
        <div class="login-container">
            
            <h1 class="main-title">LOG IN TO YOUR ACCOUNT</h1>

            <a href="<?= $login_url ?>" class="btn-google">
                <div class="google-icon-wrapper">
                    <!-- Inline Base64 Google Icon -->
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Google_%22G%22_logo.svg/250px-Google_%22G%22_logo.svg.png" alt="G" width="18" height="18">
                </div>
                <span>Continue with Google</span>
            </a>

            <div class="or-separator">or</div>

            <!-- Modified form section with email and password -->
            <div class="input-group">
                <label class="input-label" for="email">Email:</label>
                <input type="email" class="input-field" id="email" placeholder="Enter email" required>
            </div>

            <!-- ── NEW PASSWORD SECTION FOR LOGIN ── -->
            <div class="input-group">
                <label class="input-label" for="password">Password:</label>
                <input type="password" class="input-field" id="password" placeholder="Enter password" required>
            </div>

            <button type="submit" class="btn-login">Log in</button>

            <div class="login-footer">
                <p>Don't have an account? <a href="signup.php">Sign up</a></p>
                <p style="margin-top: 15px;">Are you a Motowow dealer? <a href="#">Log in as a dealer</a></p>
            </div>

        </div>
    </main>

    <!-- Footer -->
    <div>
        <?php include __DIR__ . '/../includes/footer.php'; ?>
    </div>
</body>
</html>