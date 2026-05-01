<?php
require_once '../config/config.php';

// If NOT logged in, redirect to login page
if (!isset($_SESSION['user_data'])) {
    header('Location: login.php');
    exit;
}

// Ensure an admin doesn't accidentally end up on the user dashboard
if ($_SESSION['user_data']['is_admin']) {
    header('Location: dashboard-admin.php');
    exit;
}

$user = $_SESSION['user_data'];
// Extract the name and make it uppercase for the stylized greeting
$display_name = strtoupper($user['name']); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Dashboard — Motowow</title>
    <!-- Assuming your CSS is in the ref folder -->
    <link rel="stylesheet" href="../ref/css/main.css?v=<?php echo time(); ?>">
    
    <style>
        body {
            background-color: #ffffff;
            margin: 0;
            padding: 0;
            font-family: var(--font-regular, system-ui, sans-serif);
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main {
            flex-grow: 1;
        }

        /* --- Top Hero Section --- */
        .dashboard-hero {
            max-width: 1200px;
            margin: 60px auto 40px;
            padding: 0 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 40px;
        }

        .hero-left {
            flex: 1;
            max-width: 600px;
        }

        .hero-right {
            flex: 1;
            display: flex;
        }

        .hero-right img {
            transform: scaleX(-1);
            width: 120%;
            height: auto;
        }

        .welcome-title {
            font-family: var(--font-caps, 'Arial Black', Impact, sans-serif);
            font-size: 3.5rem;
            color: #000000;
            text-transform: uppercase;
            margin: 0 0 16px;
            line-height: 1.1;
            letter-spacing: -0.02em;
        }

        .welcome-subtitle {
            font-size: 1.1rem;
            color: #000000;
            margin: 0 0 30px;
        }

        .welcome-subtitle a {
            color: #000000;
            font-family: var(--font-bold, system-ui, sans-serif);
            text-decoration: underline;
        }

        /* --- Buttons --- */
        .action-buttons {
            display: flex;
            flex-direction: column;
            gap: 12px;
            max-width: 350px;
            margin-bottom: 30px;
        }

        .btn-outline {
            display: block;
            width: 100%;
            padding: 16px;
            background-color: #ffffff;
            border: 1px solid #000000;
            border-radius: 6px;
            color: #000000;
            font-family: var(--font-bold, system-ui, sans-serif);
            font-size: 1.1rem;
            text-align: center;
            text-decoration: none;
            transition: all 0.2s ease;
            box-sizing: border-box;
        }

        .btn-outline:hover {
            background-color: #f8fafc;
            border-color: #2563eb;
            color: #2563eb;
        }

        /* --- Ratings Block --- */
        .trust-rating {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 0.95rem;
            color: #000000;
        }

        .trust-rating strong {
            font-family: var(--font-bold, system-ui, sans-serif);
        }

        /* --- Lower Content Section --- */
        .dashboard-content {
            background-color: #f4f4f5;
            padding: 60px 20px;
            min-height: 400px;
        }

        .content-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .skeleton-card {
            background-color: #ffffff;
            border-radius: 8px;
            border: 1px solid #e2e8f0;
            height: 250px;
            width: 100%;
            display: flex; 
            flex-direction: column;
            align-items: center; 
            justify-content: center; 
            color: #9ca3af;
        }

        .skeleton-card h3 {
            font-family: var(--font-bold, system-ui, sans-serif);
            color: #4b5563;
            margin: 0 0 10px;
        }

        @media (max-width: 900px) {
            .dashboard-hero {
                flex-direction: column;
                text-align: center;
            }
            .hero-left, .hero-right {
                width: 100%;
            }
            .action-buttons {
                margin: 0 auto 30px;
            }
            .trust-rating {
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div>
        <?php include __DIR__ . '/../includes/header.php'; ?>
    </div>

    <main>
        <!-- Top Hero Section -->
        <section class="dashboard-hero">
            <div class="hero-left">
                <h1 class="welcome-title">WELCOME BACK, <?= $display_name ?>!</h1>
                <p class="welcome-subtitle"><a href="#">View your motors</a> or start a new search</p>
                
                <div class="action-buttons">
                    <!-- Update these links to point exactly to your actual pages -->
                    <a href="../pages/hero-nav-pages/buying.php" class="btn-outline">Find a motor</a>
                    <a href="../pages/header-pages/sell.php" class="btn-outline">Value my motor</a>
                </div>
            </div>
            
            <div class="hero-right">
                <img src="../assets/images/dashboard-motor.webp" alt="Motorcycle" onerror="this.style.display='none'">
            </div>
        </section>

        <!-- Lower Grey Content Section -->
        <section class="dashboard-content">
            <div class="content-container">
                <div class="skeleton-card">
                    <h3>Your Garage is empty</h3>
                    <p>Motors you save or list for sale will appear here.</p>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <div>
        <?php include __DIR__ . '/../includes/footer.php'; ?>
    </div>
</body>
</html>