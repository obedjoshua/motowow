<?php
require_once __DIR__ . '/../lib/google-api-php-client--PHP8.1/vendor/autoload.php';
require_once __DIR__ . '/../config/config.php';

if (isset($_SESSION['user_data'])) {
    header('Location: dashboard.php');
    exit;
}

$client = new Google_Client();
$client->setClientId(GOOGLE_CLIENT_ID);
$client->setClientSecret(GOOGLE_CLIENT_SECRET);
$client->setRedirectUri(GOOGLE_REDIRECT_URI);
$client->addScope("email");
$client->addScope("profile");
$state = bin2hex(random_bytes(16));
$_SESSION['oauth_state'] = $state;
$client->setState($state);
$login_url = $client->createAuthUrl();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up for a free account — Motowow</title>
    <link rel="stylesheet" href="../ref/css/main.css?v=<?php echo time(); ?>">
    
    <style>
        body {
            background-color: #f8fafc;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            font-family: var(--font-regular, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif);
            color: #000000;
            line-height: 1.5;
        }

        .main-wrapper {
            flex: 1;
            padding: 80px 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .signup-grid {
            width: 100%;
            max-width: 1100px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px; 
            align-items: flex-start;
        }

        .left-column {
            display: flex;
            flex-direction: column;
            gap: 25px;
        }

        .page-title {
            font-family: var(--font-bold, system-ui, sans-serif);
            font-size: 2.2rem;
            margin: 0;
            letter-spacing: -0.01em;
            color: #0f172a;
        }

        .page-intro {
            font-size: 1.05rem;
            margin: 0;
            color: #334155;
            line-height: 1.6;
        }

        .signup-card {
            background-color: #ffffff;
            padding: 40px; /* More padding inside the card */
            border-radius: 12px;
            /* The subtle, floating shadow */
            box-shadow: 0 10px 40px -10px rgba(0, 0, 0, 0.08);
            border: 1px solid rgba(0,0,0,0.03); /* Subtle border to define edges */
            width: 100%;
            max-width: 440px;
            text-align: center;
            box-sizing: border-box;
        }

        .btn-google {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 50px;
            background-color: #4285F4;
            border-radius: 6px;
            color: #ffffff;
            font-family: var(--font-bold, system-ui, sans-serif);
            font-size: 1rem;
            text-decoration: none;
            border: none;
            cursor: pointer;
            box-sizing: border-box;
            transition: background-color 0.2s ease, transform 0.1s ease;
        }
        .btn-google:hover { background-color: #357ae8; transform: translateY(-1px); }
        .google-icon-wrapper {
            background-color: #ffffff;
            padding: 10px;
            border-radius: 4px 0 0 4px;
            margin-right: 15px;
            display: flex; align-items: center; justify-content: center;
            margin-left: 2px; /* Slight adjustment for exact borders */
        }
        .btn-google span { flex-grow: 1; text-align: center; margin-right: 35px; }

        /* Separator style */
        .or-separator {
            display: flex;
            align-items: center;
            color: #94a3b8;
            font-family: var(--font-bold, system-ui, sans-serif);
            font-size: 0.9rem;
            margin: 25px 0;
            text-transform: uppercase;
        }
        .or-separator::before, .or-separator::after {
            content: "";
            flex: 1;
            border-bottom: 1px solid #e2e8f0;
        }
        .or-separator:not(:empty)::before { margin-right: 1em; }
        .or-separator:not(:empty)::after { margin-left: 1em; }

        .input-group {
            text-align: left;
            margin-bottom: 20px;
        }

        .input-label {
            display: block;
            font-family: var(--font-bold, system-ui, sans-serif);
            font-size: 0.95rem;
            color: #0f172a;
            margin-bottom: 8px;
        }

        .input-wrapper {
            position: relative;
            margin-bottom: 8px;
        }

        .mail-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            width: 18px;
            height: 18px;
            color: #94a3b8;
        }

        .input-field {
            width: 100%;
            height: 48px;
            padding: 0 15px 0 45px; 
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            font-size: 1rem;
            color: #000000;
            box-sizing: border-box;
            font-family: var(--font-regular, system-ui, sans-serif);
            transition: border-color 0.2s ease, box-shadow 0.2s ease;
        }

        .input-field:focus {
            outline: none;
            border-color: #33E9F2;
            box-shadow: 0 0 0 3px rgba(51, 233, 242, 0.2);
        }

        .helper-text {
            font-size: 0.85rem;
            color: #64748b;
            display: block;
        }

        /* ── Cyan Accent color submit button ── */
        .btn-submit {
            display: block;
            width: 100%;
            height: 50px;
            background-color: #33E9F2; 
            border-radius: 6px;
            color: #000000;
            font-family: var(--font-bold, system-ui, sans-serif);
            font-size: 1.1rem;
            text-align: center;
            text-decoration: none;
            border: none;
            cursor: pointer;
            box-sizing: border-box;
            transition: background-color 0.2s ease, transform 0.1s ease;
            margin-top: 10px;
        }
        .btn-submit:hover { background-color: #25d4dd; transform: translateY(-1px); }

        .card-footer {
            margin-top: 30px;
            font-family: var(--font-regular, system-ui, sans-serif);
            font-size: 0.85rem;
            color: #64748b;
            line-height: 1.6;
            text-align: left;
            border-top: 1px solid #f1f5f9;
            padding-top: 20px;
        }
        .card-footer a {
            color: #0f172a;
            font-family: var(--font-bold, system-ui, sans-serif);
            text-decoration: underline;
        }

        .right-column {
            display: flex;
            flex-direction: column;
            gap: 30px;
            max-width: 500px;
        }

        .side-image {
            width: 100%;
            border-radius: 12px;
            overflow: hidden;
            display: block;
            box-shadow: 0 12px 35px -5px rgba(0, 0, 0, 0.15);
        }
        .side-image img { width: 100%; display: block; object-fit: cover; }

        .help-title {
            font-family: var(--font-bold, system-ui, sans-serif);
            font-size: 1.25rem;
            margin: 0;
            color: #0f172a;
        }

        .help-list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
            gap: 16px;
            font-family: var(--font-bold, system-ui, sans-serif);
            font-size: 1.05rem;
            color: #0f172a;
        }
        .help-list li {
            display: flex;
            align-items: center;
            gap: 14px;
        }
        .check-icon {
            width: 24px;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #22c55e; /* Exact bright green */
            color: #ffffff;
            border-radius: 50%;
            flex-shrink: 0;
        }
        .check-icon svg { width: 14px; height: 14px; stroke-width: 3; }

        @media (max-width: 900px) {
            .signup-grid { grid-template-columns: 1fr; gap: 40px; }
            .right-column { max-width: 100%; }
        }
    </style>
</head>
<body>
    <div>
        <?php include __DIR__ . '/../includes/header.php'; ?>
    </div>

    <main class="main-wrapper">
        <div class="signup-grid">
            <div class="left-column">
                <h1 class="page-title">Get the best deal on your new car</h1>
                <p class="page-intro">Get great offers, news, and advice from us and our dealer and manufacturer partners by subscribing to our free service.</p>

                <div class="signup-card">
                    <a href="<?= $login_url ?>" class="btn-google">
                        <div class="google-icon-wrapper">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Google_%22G%22_logo.svg/250px-Google_%22G%22_logo.svg.png" alt="G" width="18" height="18">
                        </div>
                        <span>Continue with Google</span>
                    </a>

                    <div class="or-separator">or</div>

                    <form action="process-signup.php" method="POST">
                        <div class="input-group">
                            <label class="input-label" for="email">Enter your email for access:</label>
                            <div class="input-wrapper">
                                <svg class="mail-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                <input type="email" class="input-field" id="email" name="email" placeholder="Enter email" required>
                            </div>
                            <span class="helper-text">(We won't share it with dealers or any of our partners)</span>
                        </div>

                        <div class="input-group">
                            <label class="input-label" for="password">Create a password:</label>
                            <div class="input-wrapper">
                                <!-- Lock icon -->
                                <svg class="mail-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                <input type="password" class="input-field" id="password" name="password" placeholder="Enter password" required>
                            </div>
                        </div>

                        <button type="submit" class="btn-submit">Find deals!</button>
                    </form>

                    <div class="card-footer">
                        <p>By proceeding you agree to our <a href="#">T&Cs</a> and confirm you have read our <a href="#">Privacy policy</a>. You can opt-out of these emails and stop this service at any time.</p>
                    </div>
                </div>
            </div>
            <div class="right-column">
                <div class="side-image">
                    <img src="https://www.rockstarpuppyboutique.com/cdn/shop/files/motorcycle-pet-carrier__06675.png?v=1757555590" alt="Teddy bear in car trunk box" onerror="this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA1MDAgMzA5Ij48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSIjZGRkIi8+PHRleHQgeD0iNTAlIiB5PSI1MCUiIGZvbnQtc2l6ZT0iMjBweCIgdGV4dC1hbmNob3I9Im1pZGRsZSIgZmlsbD0iIzU1NSIgZHk9Ii4zZW0iPlNpZGUgSW1hZ2UgUGxhY2Vob2xkZXI8L3RleHQ+PC9zdmc+'">
                </div>
                <h2 class="help-title">How can we help?</h2>
                <ul class="help-list">
                    <li>
                        <span class="check-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        </span>
                        <span>Get offers on a new car built to your specification</span>
                    </li>
                    <li>
                        <span class="check-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        </span>
                        <span>Beat the queues with readily available cars in stock</span>
                    </li>
                    <li>
                        <span class="check-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        </span>
                        <span>Free part-exchange valuation of your current car</span>
                    </li>
                </ul>
            </div>
            
        </div>
    </main>

    <!-- Footer -->
    <div>
        <?php include __DIR__ . '/../includes/footer.php'; ?>
    </div>
</body>
</html>