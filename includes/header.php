<?php
// Base path for your project (IMPORTANT)
$base = '/demo1';

// Navigation pages
$nav_pages = [
    'used'   => 'Used',
    'leased' => 'Leased',
    'news'   => 'News',
    'sell'   => 'Sell',
    'sales'  => 'Sales',
];

// Get current page safely
$current = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '.php');

// Header style logic
$is_subpage = array_key_exists($current, $nav_pages);
$header_class = $is_subpage ? 'main-header__home main-header__home--light' : 'main-header__home';
?>

<header class="<?= $header_class ?>">
    <div class="hero-header">
        <ul class="nav-main__header">
            <?php foreach ($nav_pages as $slug => $label): ?>
                <li>
                    <a href="<?= $base ?>/pages/header-pages/<?= $slug ?>.php"
                       class="<?= $current === $slug ? 'nav-link--active' : '' ?>">
                        <?= $label ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <div class="hero-grid-container">
        <div class="hero-nav-menu">

            <!-- ✅ FIXED LOGO PATH -->
            <div class="logo-wrapper">
                <a href="<?= $base ?>/index.php">
                    <img src="<?= $base ?>/assets/images/logo.png" alt="motowow">
                </a>
            </div>

            <div class="pill-nav-group">
                <a href="<?= $base ?>/pages/hero-nav-pages/buying.php" class="pill-btn">
                    <svg viewBox="0 0 640 640"><path d="M280 80C266.7 80 256 90.7 256 104C256 117.3 266.7 128 280 128L336.6 128L359.1 176.7L264 248C230.6 222.9 189 208 144 208L88 208C74.7 208 64 218.7 64 232C64 245.3 74.7 256 88 256L144 256C222.5 256 287.2 315.6 295.2 392L269.8 392C258.6 332.8 206.5 288 144 288C73.3 288 16 345.3 16 416C16 486.7 73.3 544 144 544C206.5 544 258.5 499.2 269.8 440L320 440C333.3 440 344 429.3 344 416L344 393.5C344 348.4 369.7 308.1 409.5 285.8L421.6 311.9C389.2 335.1 368.1 373.1 368.1 416C368.1 486.7 425.4 544 496.1 544C566.8 544 624.1 486.7 624.1 416C624.1 345.3 566.8 288 496.1 288C485.4 288 475.1 289.3 465.2 291.8L433.8 224L488 224C501.3 224 512 213.3 512 200L512 152C512 138.7 501.3 128 488 128L434.7 128C427.8 128 421 130.2 415.5 134.4L398.4 147.2L373.8 93.9C369.9 85.4 361.4 80 352 80L280 80z"/></svg>
                    <span>Buying</span>
                </a>

                <a href="<?= $base ?>/pages/header-pages/sell.php" class="pill-btn">
                    <svg viewBox="0 0 640 640"><path d="M208 96C190.3 96 176 110.3 176 128L176 192L152 192C138.7 192 128 202.7 128 216C128 229.3 138.7 240 152 240L176 240L176 272L152 272C138.7 272 128 282.7 128 296C128 309.3 138.7 320 152 320L176 320L176 512C176 529.7 190.3 544 208 544C225.7 544 240 529.7 240 512L240 416L336 416C401.6 416 458 376.5 482.7 320L520 320C533.3 320 544 309.3 544 296C544 282.7 533.3 272 520 272L495.2 272C495.7 266.7 496 261.4 496 256C496 250.6 495.7 245.3 495.2 240L520 240C533.3 240 544 229.3 544 216C544 202.7 533.3 192 520 192L482.7 192C458 135.5 401.6 96 336 96L208 96z"/></svg>
                    <span>Selling</span>
                </a>

                <a href="#" class="pill-btn">
                    <svg viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 12a5 5 0 1 0-0.001-10.001A5 5 0 0 0 12 12zm0 2c-4 0-8 2-8 6v2h16v-2c0-4-4-6-8-6z"/>
                    </svg>
                    <span>Log in</span>
                </a>

                <a href="#" class="pill-btn">
                    <svg viewBox="0 0 640 640"><path d="M96 160C96 142.3 110.3 128 128 128L512 128C529.7 128 544 142.3 544 160C544 177.7 529.7 192 512 192L128 192C110.3 192 96 177.7 96 160zM96 320C96 302.3 110.3 288 128 288L512 288C529.7 288 544 302.3 544 320C544 337.7 529.7 352 512 352L128 352C110.3 352 96 337.7 96 320zM544 480C544 497.7 529.7 512 512 512L128 512C110.3 512 96 497.7 96 480C96 462.3 110.3 448 128 448L512 448C529.7 448 544 462.3 544 480z"/></svg>
                    <span>Menu</span>
                </a>
            </div>
        </div>
    </div>
</header>