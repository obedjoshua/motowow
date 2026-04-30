<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buying Guides — Motor News</title>
    <link rel="stylesheet" href="../../ref/css/main.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../ref/css/news.css?v=<?php echo time(); ?>">
    <style>
        .news-hero--guides {
            background: linear-gradient(135deg, #10b981 0%, #047857 100%);
        }
        
        .news-hero--guides .news-hero__title,
        .news-hero--guides .news-hero__subtitle,
        .news-hero--guides .news-breadcrumb,
        .news-hero--guides .news-breadcrumb a {
            color: var(--color-white-pure, #ffffff);
            text-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }

        .news-hero--guides .news-breadcrumb a:hover {
            color: #d1fae5;
        }

        .guide-section {
            padding: 60px 20px 40px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .guide-section__header {
            text-align: center;
            margin-bottom: 48px;
        }

        .guide-section__header h2 {
            font-family: var(--font-caps);
            font-size: 2.5rem;
            color: var(--color-dark);
            text-transform: uppercase;
            letter-spacing: -0.5px;
            margin: 0 0 10px;
        }

        .guide-section__header p {
            font-family: var(--font-regular);
            font-size: 1.1rem;
            color: var(--color-grey);
            max-width: 600px;
            margin: 0 auto;
        }

        .guide-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 24px;
        }

        .guide-card {
            background: var(--color-white-pure);
            border-radius: 16px;
            padding: 32px 24px;
            border: 1px solid #6e6e6e;
            position: relative;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .guide-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(0,0,0,0.1);
        }

        .guide-card__number {
            position: absolute;
            top: -20px;
            right: -10px;
            font-family: var(--font-caps);
            font-size: 8rem;
            color: rgba(16, 185, 129, 0.05);
            line-height: 1;
            z-index: 0;
            pointer-events: none;
        }

        .guide-card__content {
            position: relative;
            z-index: 1;
        }

        .guide-card__icon {
            width: 48px;
            height: 48px;
            background: #d1fae5;
            color: #047857;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .guide-card h3 {
            font-family: var(--font-bold);
            font-size: 1.2rem;
            color: var(--color-dark);
            margin: 0 0 12px;
        }

        .guide-card p {
            font-family: var(--font-regular);
            font-size: 0.95rem;
            color: var(--color-grey);
            line-height: 1.6;
            margin: 0;
        }

        .faq-wrapper {
            background-color: #f4f4f6;
            padding: 80px 20px;
        }

        .faq-inner {
            max-width: 840px;
            margin: 0 auto;
        }

        .faq-main-title {
            text-align: center;
            font-family: var(--font-caps);
            font-size: 2.8rem;
            color: #000000;
            margin: 0 0 40px;
            text-transform: uppercase;
            letter-spacing: -1px;
        }

        .faq-card {
            background: #ffffff;
            border-radius: 8px;
            border: 1px solid #e2e8f0;
            overflow: hidden;
            margin-bottom: 50px;
        }

        .faq-item {
            border-bottom: 1px solid #e2e8f0;
        }

        .faq-item:last-child {
            border-bottom: none;
        }

        .faq-question {
            list-style: none;
            padding: 20px 24px;
            font-family: var(--font-bold);
            font-size: 1rem;
            color: #000000;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #ffffff;
            transition: background-color 0.2s ease;
        }

        .faq-question::-webkit-details-marker {
            display: none;
        }

        .faq-question:hover {
            background-color: #fafafa;
        }

        /* Custom Chevron Icon */
        .faq-icon {
            width: 14px;
            height: 14px;
            fill: none;
            stroke: #000000;
            stroke-width: 3;
            stroke-linecap: round;
            stroke-linejoin: round;
            transition: transform 0.3s ease;
        }

        .faq-item[open] .faq-icon {
            transform: rotate(180deg);
        }

        .faq-answer {
            padding: 0 24px 24px 24px;
            font-family: var(--font-regular);
            font-size: 0.95rem;
            color: var(--color-dark);
            line-height: 1.6;
        }

        .faq-answer p {
            margin: 0;
        }

        .faq-footer {
            text-align: center;
        }

        .faq-footer h3 {
            font-family: var(--font-bold);
            font-size: 1.5rem;
            color: #000000;
            margin: 0 0 12px;
        }

        .faq-footer p {
            font-family: var(--font-regular);
            font-size: 1rem;
            color: #000000;
            margin: 0 0 24px;
        }

        .faq-btn {
            display: inline-block;
            background-color: #26e8e8;
            color: #000000;
            font-family: var(--font-bold);
            font-size: 1rem;
            padding: 14px 28px;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.2s ease;
        }

        .faq-btn:hover {
            background-color: #1bc3c3;
        }
    </style>
</head>
<body>
    <div>
        <?php include __DIR__ . '/../../includes/header.php'; ?>
    </div>

    <main class="news-page">

        <div class="news-hero-wrapper">
            <div class="news-hero__image-left">
                <img src="../../assets/images/news-left.png" alt="" draggable="false">
            </div>
            <div class="news-hero news-hero--guides">
                <nav class="news-breadcrumb">
                    <a href="/demo1/index.php">Home</a>
                    <span>›</span>
                    <a href="/demo1/pages/header-pages/news.php">News</a>
                    <span>›</span>
                    <span>Buying Guides</span>
                </nav>
                <h1 class="news-hero__title">Buying Guides</h1>
                <p class="news-hero__subtitle">Expert infographics and step-by-step advice to help you navigate the market and choose your perfect motorcycle.</p>
            </div>
            <div class="news-hero__image-right">
                <img src="../../assets/images/news-right.png" alt="" draggable="false">
            </div>
        </div>

        <section class="guide-section">
            
            <div class="guide-section__header">
                <h2>How to Choose Your Ride</h2>
                <p>Follow our essential 4-step framework before making your next big purchase.</p>
            </div>

            <div class="guide-grid">
                <div class="guide-card">
                    <div class="guide-card__number">1</div>
                    <div class="guide-card__content">
                        <div class="guide-card__icon">
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                        </div>
                        <h3>Determine Your Lifestyle</h3>
                        <p>Are you filtering through heavy city traffic, or planning long weekend rides? Choose between Scooters (convenience), Naked bikes (versatility), or Adventure bikes (touring).</p>
                    </div>
                </div>

                <div class="guide-card">
                    <div class="guide-card__number">2</div>
                    <div class="guide-card__content">
                        <div class="guide-card__icon">
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                        </div>
                        <h3>Engine Displacement</h3>
                        <p>110cc to 155cc is perfect for maximum fuel economy in the city. If you plan to use the expressways (NLEX/SLEX), remember you legally need a motorcycle with at least a 400cc engine.</p>
                    </div>
                </div>

                <div class="guide-card">
                    <div class="guide-card__number">3</div>
                    <div class="guide-card__content">
                        <div class="guide-card__icon">
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                        </div>
                        <h3>Calculate Total Costs</h3>
                        <p>The SRP isn't the final price. Budget an extra 10-15% of the bike's value for comprehensive insurance, LTO registration, and high-quality safety gear (helmet, jacket, gloves).</p>
                    </div>
                </div>

                <div class="guide-card">
                    <div class="guide-card__number">4</div>
                    <div class="guide-card__content">
                        <div class="guide-card__icon">
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                        </div>
                        <h3>Brand & Aftersales</h3>
                        <p>Research the availability of spare parts and authorized service centers in your local area. A cheaper lesser-known brand might end up costing more if parts have to be imported.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="faq-wrapper">
            <div class="faq-inner">
                <h2 class="faq-main-title">BUYING GUIDE FAQS</h2>
                
                <div class="faq-card">
                    
                    <details class="faq-item">
                        <summary class="faq-question">
                            Is it better to buy brand new or second-hand?
                            <svg class="faq-icon" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </summary>
                        <div class="faq-answer">
                            <p>If you are a beginner, buying second-hand is often recommended. You will likely drop your first bike, and doing so on a used unit hurts your wallet less. However, if you want peace of mind, dealer warranties, and zero hidden mechanical issues, brand new is the way to go.</p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary class="faq-question">
                            Do I really need ABS (Anti-lock Braking System)?
                            <svg class="faq-icon" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </summary>
                        <div class="faq-answer">
                            <p>Yes. If your budget allows for it, always opt for the ABS variant. ABS prevents your wheels from locking up during emergency braking, especially on wet or slippery roads, drastically reducing the chance of a crash.</p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary class="faq-question">
                            How much should I spend on safety gear?
                            <svg class="faq-icon" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </summary>
                        <div class="faq-answer">
                            <p>A good rule of thumb is the "10% rule." If you buy a ₱150,000 motorcycle, expect to spend at least ₱15,000 on an ECE/Snell-certified helmet, riding jacket with armor, proper gloves, and riding boots. Never compromise on a helmet.</p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary class="faq-question">
                            What is the best beginner motorcycle?
                            <svg class="faq-icon" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </summary>
                        <div class="faq-answer">
                            <p>The "best" beginner bike depends on your height and style, but generally, 150cc to 300cc motorcycles are ideal. They have manageable power, are lightweight, and are forgiving of beginner mistakes. Popular choices include the Honda Click 160 or the Yamaha MT-15.</p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary class="faq-question">
                            What documents do I need to prepare to buy a motorcycle?
                            <svg class="faq-icon" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </summary>
                        <div class="faq-answer">
                            <p>For cash purchases, usually just two valid IDs. For installment plans, you will typically need two valid IDs, proof of billing, proof of income (like payslips or an ITR), and sometimes a co-maker depending on the dealership's requirements.</p>
                        </div>
                    </details>

                </div>

                <div class="faq-footer">
                    <h3>Got a less frequent question?</h3>
                    <p>We can help</p>
                    <a href="#" class="faq-btn">Visit support centre</a>
                </div>

            </div>
        </section>

    </main>

    <div>
        <?php include __DIR__ . '/../../includes/footer.php'; ?>
    </div>
</body>
</html>