<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motowow</title>
    <link rel="stylesheet" href="ref/css/main.css">
</head>
<body>

    <?php include 'includes/header.php'; ?>

    <main>
        <div class="page-content" id="main-content" role="main" tabindex="-1">
            <div class="promotion-tab">
                <div class="heading-wrapper">
                    <h1>browse, buy, sell all in one place</h1>
                </div>
                <div class="search-card">
                    <input type="radio" name="search-tab" id="tab-find" class="tab-radio" checked>
                    <input type="radio" name="search-tab" id="tab-sell" class="tab-radio">
                    <input type="radio" name="search-tab" id="tab-reviews" class="tab-radio">
                    <div class="search-card__tabs">
                        <label for="tab-find" class="search-tab">Find a motor</label>
                        <label for="tab-sell" class="search-tab">Sell my motor</label>
                        <label for="tab-reviews" class="search-tab">Read reviews</label>
                    </div>
                    <div class="search-card__body">
                        <div class="search-bar">
                            <div class="search-input-wrapper">
                                <input type="text" placeholder=" " class="sp-input" />
                                <span class="sp-label">Search by <span class="sp-word"></span></span>
                            </div>
                            <button class="search-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="18" height="18" fill="white">
                                    <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/>
                                </svg>
                            </button>
                        </div>
                        <div class="search-card__helper">
                            <span>or let us help you</span>
                            <button class="helper-btn">Find a motor</button>
                        </div>
                    </div>
                </div>
                <div class="image-wrapper1">
                    <img src="assets/images/aerox.png" alt="Promotion Image1" draggable="false">
                </div>
                <div class="image-wrapper2">
                    <img src="assets/images/adv.avif" alt="Promotion Image2" draggable="false">
                </div>
            </div>
        </div>
    </main>
</body>
</html>