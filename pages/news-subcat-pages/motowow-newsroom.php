<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motowow Newsroom — Motor News</title>
    <link rel="stylesheet" href="../../ref/css/main.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../ref/css/news.css?v=<?php echo time(); ?>">
    
    <style>
        /* Cyan/Blue Gradient Hero */
        .news-hero--newsroom {
            background: linear-gradient(135deg, #22d8ef 0%, #0b8fa0 100%);
        }
        
        /* Ensure text is readable against the bright gradient */
        .news-hero--newsroom .news-hero__title,
        .news-hero--newsroom .news-hero__subtitle,
        .news-hero--newsroom .news-breadcrumb,
        .news-hero--newsroom .news-breadcrumb a {
            color: var(--color-white-pure, #ffffff);
            text-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }

        .news-hero--newsroom .news-breadcrumb a:hover {
            color: #e2e8f0;
        }

        /* Coming Soon & Newsletter Layout */
        .coming-soon-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 60px 20px;
            text-align: center;
            gap: 40px;
            max-width: 800px;
            margin: 0 auto;
        }

        .coming-soon__header h2 {
            font-family: var(--font-caps);
            font-size: 3rem;
            color: var(--color-dark);
            margin: 0 0 10px;
            text-transform: uppercase;
            letter-spacing: -1px;
        }

        .coming-soon__header p {
            font-family: var(--font-regular);
            font-size: 1.1rem;
            color: var(--color-grey);
            margin: 0;
            max-width: 500px;
        }

        /* Carwow-style Newsletter Card */
        .newsletter-card {
            background: var(--color-white-pure);
            border-radius: 16px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.08);
            padding: 40px;
            width: 100%;
            max-width: 540px;
            text-align: center;
            border: 1px solid #eaeaea;
        }

        .newsletter-card h3 {
            font-family: var(--font-bold);
            font-size: 1.5rem;
            color: var(--color-dark);
            margin: 0 0 10px;
        }

        .newsletter-card p {
            font-family: var(--font-regular);
            font-size: 0.95rem;
            color: var(--color-grey);
            margin: 0 0 24px;
        }

        .newsletter-form {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .newsletter-form__input {
            width: 100%;
            padding: 16px 20px;
            border-radius: 8px;
            border: 2px solid #e2e8f0;
            font-family: var(--font-regular);
            font-size: 1rem;
            outline: none;
            transition: border-color 0.2s ease;
        }

        .newsletter-form__input:focus {
            border-color: #22d8ef;
        }

        .newsletter-form__btn {
            width: 100%;
            padding: 16px 24px;
            border-radius: 8px;
            border: none;
            background: var(--color-dark);
            color: var(--color-white-pure);
            font-family: var(--font-bold);
            font-size: 1rem;
            cursor: pointer;
            transition: transform 0.2s ease, background 0.2s ease;
        }

        .newsletter-form__btn:hover {
            background: #22d8ef;
            color: var(--color-dark);
            transform: translateY(-2px);
        }

        @media (min-width: 600px) {
            .newsletter-form {
                flex-direction: row;
            }
            .newsletter-form__btn {
                width: auto;
                flex-shrink: 0;
            }
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
            <div class="news-hero news-hero--newsroom">
                <nav class="news-breadcrumb">
                    <a href="/demo1/index.php">Home</a>
                    <span>›</span>
                    <a href="/demo1/pages/header-pages/news.php">News</a>
                    <span>›</span>
                    <span>Motowow Newsroom</span>
                </nav>
                <h1 class="news-hero__title">Motowow Newsroom</h1>
                <p class="news-hero__subtitle">Official press releases, announcements, and corporate updates from the Motowow team.</p>
            </div>
            <div class="news-hero__image-right">
                <img src="../../assets/images/news-right.png" alt="" draggable="false">
            </div>
        </div>

        <section class="coming-soon-section">
            
            <div class="coming-soon__header">
                <h2>Coming Soon</h2>
                <p>Our official newsroom is currently being prepared. Check back shortly for the latest press releases and company updates.</p>
            </div>

            <div class="newsletter-card">
                <h3>Sign up to our newsletter</h3>
                <p>Don't miss out. Get the latest news, announcements, and exclusive Motowow updates delivered straight to your inbox.</p>
                
                <form class="newsletter-form" action="#" method="POST" onsubmit="event.preventDefault(); alert('Subscribed!');">
                    <input type="email" class="newsletter-form__input" placeholder="Enter your email address" required>
                    <button type="submit" class="newsletter-form__btn">Subscribe</button>
                </form>
            </div>

        </section>

    </main>

    <div>
        <?php include __DIR__ . '/../../includes/footer.php'; ?>
    </div>
</body>
</html>