<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motowow</title>
    <link rel="stylesheet" href="/demo1/ref/css/main.css">
    <link rel="stylesheet" href="/demo1/ref/css/used.css?v=<?php echo time(); ?>">
</head>
<body>
    <div>
        <?php include __DIR__ . '/../../includes/header.php'; ?>
    </div>
    <main>
        <div class="used-hero-wrapper">
            <div class="used-hero__image-left"> 
                <img src="../../assets/images/click125.png" alt="" draggable="false">
            </div>
            <div class="used-hero">
                <div class="used-hero__content">
                    <h1 class="used-hero__title">Used Motors</h1>
                    <p class="used-hero__subtitle">Buy high quality motors from rated, reviewed and trusted dealers</p>
                    <div class="used-hero__actions">
                        <a href="#" class="used-btn used-btn--primary">Select a motor</a>
                        <a href="#" class="used-btn used-btn--secondary">Browse used motors</a>
                    </div>
                </div>
            </div>  
            <div class="used-hero__image-right">
                <img src="../../assets/images/nmax2.png" alt="" draggable="false">
            </div>
        </div>
    </main>
</body>
</html>