<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitemap — Motowow</title>
    <link rel="stylesheet" href="/demo1/ref/css/main.css?v=<?php echo time(); ?>">
    
    <style>
        /* ── Exact Replica Sitemap Layout ── */
        body {
            background-color: #ffffff;
            margin: 0;
            padding: 0;
        }

        .sitemap-page {
            background-color: #ffffff;
            padding: 60px 0 120px; 
            min-height: 100vh;
        }

        .sitemap-container {
            max-width: 1200px; /* Wide layout to accommodate the 3 columns */
            margin: 0 auto;
            padding: 0 40px;
        }

        /* ── Massive Main Title ── */
        .sitemap-main-title {
            font-family: var(--font-caps, 'Arial Black', Impact, sans-serif);
            font-size: 4.5rem; 
            font-weight: 900;
            color: #000000;
            margin: 0 0 50px;
            line-height: 1;
            letter-spacing: -0.04em;
            text-transform: uppercase;
        }

        /* ── Section Headings ── */
        .sitemap-h2 {
            font-family: var(--font-bold, system-ui, sans-serif);
            font-size: 2rem;
            color: #000000;
            margin: 60px 0 30px;
            letter-spacing: -0.02em;
        }

        /* ── 3-Column Grid Layout ── */
        .sitemap-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 40px;
            margin-bottom: 20px;
        }

        .sitemap-col {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .sitemap-col a {
            font-family: var(--font-bold, system-ui, sans-serif);
            font-size: 1.15rem; 
            font-weight: bold;
            color: #000000;
            text-decoration: underline;
            text-underline-offset: 4px;
            text-decoration-thickness: 2px;
            transition: color 0.2s ease;
            width: fit-content;
        }
    </style>
</head>
<body>
    <div>
        <?php include __DIR__ . '/../../includes/header.php'; ?>
    </div>

    <main class="sitemap-page">
        <div class="sitemap-container">
            
            <h1 class="sitemap-main-title">SITEMAP</h1>

            <h2 class="sitemap-h2">New motors</h2>
            <div class="sitemap-grid">
                <div class="sitemap-col">
                    <a href="<?= $base ?>/index.php">Motowow Homepage</a>
                    <a href="<?= $base ?>/pages/hero-nav-pages/buying.php">Buying</a>
                </div>
                <div class="sitemap-col">
                    <a href="#">New motor deals</a>
                    <a href="#">New motor reviews</a>
                </div>
                <div class="sitemap-col">
                    <a href="#">Compare motors</a>
                </div>
            </div>

            <h2 class="sitemap-h2">Used motors</h2>
            <div class="sitemap-grid">
                <div class="sitemap-col">
                    <a href="<?= $base ?>/pages/header-pages/used.php">Used</a>
                    <a href="#">Browse used motors</a>
                </div>
                <div class="sitemap-col">
                    <a href="#">Used motor deals</a>
                    <a href="#">Nearly new motors</a>
                </div>
                <div class="sitemap-col">
                    <a href="#">Used motor reviews</a>
                </div>
            </div>

            <h2 class="sitemap-h2">Leasing</h2>
            <div class="sitemap-grid">
                <div class="sitemap-col">
                    <a href="<?= $base ?>/pages/header-pages/leased.php">Leased</a>
                    <a href="#">Lease deals</a>
                </div>
                <div class="sitemap-col">
                    <a href="#">How leasing works</a>
                </div>
                <div class="sitemap-col">
                    <a href="#">Leasing calculator</a>
                </div>
            </div>

            <h2 class="sitemap-h2">Sell my motor</h2>
            <div class="sitemap-grid">
                <div class="sitemap-col">
                    <a href="<?= $base ?>/pages/header-pages/sell.php">Sell</a>
                    <a href="<?= $base ?>/pages/header-pages/sales.php">Sales</a>
                </div>
                <div class="sitemap-col">
                    <a href="#">Get a valuation</a>
                    <a href="#">How it works</a>
                </div>
                <div class="sitemap-col">
                    <a href="#">Instant offer</a>
                </div>
            </div>

            <h2 class="sitemap-h2">Guides and news</h2>
            <div class="sitemap-grid">
                <div class="sitemap-col">
                    <a href="<?= $base ?>/pages/header-pages/news.php">News</a>
                    <a href="<?= $base ?>/pages/news-subcat-pages/motowow-newsroom.php">Newsroom</a>
                    <a href="<?= $base ?>/pages/news-subcat-pages/new-models.php">New models</a>
                </div>
                <div class="sitemap-col">
                    <a href="<?= $base ?>/pages/sliding-menu-pages/advice.php">Advice</a>
                    <a href="<?= $base ?>/pages/news-subcat-pages/buying-guides.php">Buying guides</a>
                    <a href="<?= $base ?>/pages/news-subcat-pages/news-reviews.php">Reviews</a>
                </div>
                <div class="sitemap-col">
                    <a href="<?= $base ?>/pages/news-subcat-pages/price-alerts.php">Price alerts</a>
                    <a href="<?= $base ?>/pages/news-subcat-pages/resell-auctions.php">Resell & auctions</a>
                </div>
            </div>

            <h2 class="sitemap-h2">Legal</h2>
            <div class="sitemap-grid">
                <div class="sitemap-col">
                    <a href="<?= $base ?>/pages/footer-pages/privacy.php">Privacy Policy</a>
                </div>
                <div class="sitemap-col">
                    <a href="<?= $base ?>/pages/footer-pages/terms.php">Terms and Conditions</a>
                </div>
                <div class="sitemap-col">
                    <!-- Third column intentionally left blank to match 3-column flow -->
                </div>
            </div>

        </div>
    </main>

    <div>
        <?php include __DIR__ . '/../../includes/footer.php'; ?>
    </div>
</body>
</html>