<?php
require_once '../config/config.php';

// If NOT logged in, redirect to login page
if (!isset($_SESSION['user_data'])) {
    header('Location: login.php');
    exit;
}

// Security Check: Ensure standard users CANNOT access the admin dashboard
if (!$_SESSION['user_data']['is_admin']) {
    header('Location: dashboard-user.php');
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
    <title>Admin Dashboard — Motowow</title>
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
            justify-content: flex-end;
            align-items: center;
        }

        .hero-right svg {
            max-width: 100%;
            height: 250px;
            color: #e2e8f0; /* Subtle grey admin graphic */
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

        .welcome-subtitle span {
            color: #2563eb;
            font-family: var(--font-bold, system-ui, sans-serif);
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
            background-color: #0f172a;
            border-color: #0f172a;
            color: #ffffff;
        }

        .admin-badge {
            display: inline-block;
            background-color: #1e293b;
            color: #ffffff;
            padding: 6px 12px;
            border-radius: 4px;
            font-family: var(--font-bold, system-ui, sans-serif);
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 20px;
        }

        /* --- Lower Content Section (Admin Stats Grid) --- */
        .dashboard-content {
            background-color: #f4f4f5;
            padding: 60px 20px;
            min-height: 400px;
        }

        .content-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 24px;
        }

        .stat-card {
            background-color: #ffffff;
            border-radius: 8px;
            border: 1px solid #e2e8f0;
            padding: 30px;
            display: flex; 
            flex-direction: column;
        }

        .stat-card h3 {
            font-family: var(--font-bold, system-ui, sans-serif);
            color: #4b5563;
            margin: 0 0 10px;
            font-size: 1rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .stat-number {
            font-family: var(--font-caps, 'Arial Black', Impact, sans-serif);
            font-size: 3rem;
            color: #000000;
            margin: 0;
            line-height: 1;
        }

        .stat-trend {
            margin-top: 15px;
            font-size: 0.9rem;
            color: #10b981; /* Green for positive trend */
            font-weight: bold;
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
                <div class="admin-badge">Admin Access</div>
                <h1 class="welcome-title">HELLO, <?= $display_name ?>!</h1>
                <p class="welcome-subtitle">You have <span>4 pending listings</span> awaiting approval.</p>
                
                <div class="action-buttons">
                    <a href="#" class="btn-outline">Manage Listings</a>
                    <a href="#" class="btn-outline">Review Dealerships</a>
                    <a href="#" class="btn-outline">Platform Analytics</a>
                </div>
            </div>
            
            <div class="hero-right">
                <!-- A clean, abstract server/admin SVG graphic -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect>
                    <rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect>
                    <line x1="6" y1="6" x2="6.01" y2="6"></line>
                    <line x1="6" y1="18" x2="6.01" y2="18"></line>
                </svg>
            </div>
        </section>

        <!-- Lower Grey Content Section (Admin Metrics) -->
        <section class="dashboard-content">
            <div class="content-container">
                <div class="stats-grid">
                    
                    <div class="stat-card">
                        <h3>Total Active Listings</h3>
                        <p class="stat-number">1,204</p>
                        <p class="stat-trend">↑ 12% from last month</p>
                    </div>

                    <div class="stat-card">
                        <h3>Registered Users</h3>
                        <p class="stat-number">8,392</p>
                        <p class="stat-trend">↑ 5% from last month</p>
                    </div>

                    <div class="stat-card">
                        <h3>Reported Issues</h3>
                        <p class="stat-number">3</p>
                        <p class="stat-trend" style="color: #ef4444;">Requires immediate action</p>
                    </div>

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