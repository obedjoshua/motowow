<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Models — Motor News</title>
    <link rel="stylesheet" href="../../ref/css/main.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../ref/css/news.css?v=<?php echo time(); ?>">
    
    <style>
        /* Blue to Grey Gradient Hero */
        .news-hero--new-models {
            background: linear-gradient(135deg, #1e3a8a 0%, #64748b 100%);
        }
        
        /* Ensure text is readable against the dark gradient */
        .news-hero--new-models .news-hero__title,
        .news-hero--new-models .news-hero__subtitle,
        .news-hero--new-models .news-breadcrumb,
        .news-hero--new-models .news-breadcrumb a {
            color: var(--color-white-pure, #ffffff);
        }

        .news-hero--new-models .news-breadcrumb a:hover {
            color: #e2e8f0;
        }

        /* Optional: Make the grid wrap instead of scroll for a dedicated category page */
        .news-grid--category {
            flex-wrap: wrap;
            overflow-x: visible;
            justify-content: center;
        }
        .news-grid--category .news-card {
            flex: 0 0 calc(33.333% - 14px); /* 3 cards per row */
            min-width: 320px;
        }
        /* Hide the carousel arrows since it's a grid now */
        .news-grid--category-wrapper .news-carousel__arrow {
            display: none;
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
            <div class="news-hero news-hero--new-models">
                <nav class="news-breadcrumb">
                    <a href="/demo1/index.php">Home</a>
                    <span>›</span>
                    <a href="/demo1/pages/header-pages/news.php">News</a>
                    <span>›</span>
                    <span>New Models</span>
                </nav>
                <h1 class="news-hero__title">New Models</h1>
                <p class="news-hero__subtitle">Discover the latest motorcycle launches, unveils, and upcoming releases hitting the Philippine market.</p>
            </div>
            <div class="news-hero__image-right">
                <img src="../../assets/images/news-right.png" alt="" draggable="false">
            </div>
        </div>

        <section class="news-section">
            <div class="news-section__inner">
                <h2 class="news-section__heading">Latest Releases</h2>

                <div class="news-carousel-wrapper news-grid--category-wrapper">
                    <div class="news-grid news-grid--category" id="news-grid">
                        <?php
                        // --- DUCKDUCKGO IMAGE FETCHER FUNCTION ---
                        function getFirstDDGImage($query) {
                            $query = urlencode($query . " motorcycle philippines 2026");
                            
                            $ch = curl_init("https://duckduckgo.com/?q=$query");
                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                            curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0');
                            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                            $html = curl_exec($ch);
                            
                            preg_match('/vqd=([\d-]+)&/', $html, $matches);
                            if (!isset($matches[1])) return null;
                            $vqd = $matches[1];

                            $searchUrl = "https://duckduckgo.com/i.js?q=$query&vqd=$vqd&f=,,,";
                            curl_setopt($ch, CURLOPT_URL, $searchUrl);
                            $json = curl_exec($ch);
                            curl_close($ch);

                            $data = json_decode($json, true);
                            return $data['results'][0]['image'] ?? null;
                        }

                        // FILTER UPDATE: Specifically targeting new models and launches
                        $exclude = '-accident -crash -killed -dead -injury -incident -victim -police -fire -repo -auction -secondhand';
                        $include = 'motorcycle philippines ("new model" OR launch OR unveil OR reveal OR released)';
                        $query   = urlencode($include . " " . $exclude);
                        $rss_url = "https://news.google.com/rss/search?q=$query&hl=en-PH&gl=PH&ceid=PH:en";

                        $ch = curl_init($rss_url);
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
                        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0');
                        $xml_data = curl_exec($ch);
                        curl_close($ch);

                        if ($xml_data) {
                            $xml = @simplexml_load_string($xml_data, 'SimpleXMLElement', LIBXML_NOCDATA);
                            if ($xml) {
                                $xml->registerXPathNamespace('media', 'http://search.yahoo.com/mrss/');

                                $count = 0;
                                foreach ($xml->channel->item as $item) {
                                    // Increased limit for a dedicated category page
                                    if ($count >= 15) break; 
                                    
                                    $raw_date = (string)$item->pubDate;
                                    if (strpos($raw_date, '2026') === false) continue;

                                    $title       = (string)$item->title;
                                    $description = (string)$item->description;
                                    $link        = (string)$item->link;
                                    $title_lower = strtolower($title);

                                    // STRICT FILTER: Ensure it's actually a new model article
                                    if (!preg_match('/new|launch|unveil|reveal|release/', $title_lower)) {
                                        continue; 
                                    }

                                    // Blocklist filter
                                    $blocklist = ['accident','crash','dead','killed','injury','fire','theft','stolen'];
                                    foreach ($blocklist as $word) {
                                        if (strpos($title_lower, $word) !== false) continue 2;
                                    }

                                    // Image discovery
                                    $image_url = '';
                                    $media = $item->xpath('media:content | media:thumbnail');
                                    if (!empty($media)) {
                                        $image_url = (string)$media[0]['url'];
                                    }
                                    if (empty($image_url)) {
                                        if (preg_match('/<img[^>]+src="([^">]+)"/', $description, $matches)) {
                                            $image_url = $matches[1];
                                            if (strpos($image_url, 'lh3.googleusercontent.com') !== false) {
                                                $image_url = str_replace('=s100', '=s800', $image_url);
                                            }
                                        }
                                    }
                                    if (empty($image_url)) {
                                        $image_url = getFirstDDGImage($title);
                                    }

                                    $placeholder_text = '';
                                    if (empty($image_url)) {
                                        if (stripos($title, 'Honda') !== false)         $placeholder_text = 'HONDA';
                                        elseif (stripos($title, 'Yamaha') !== false)    $placeholder_text = 'YAMAHA';
                                        elseif (stripos($title, 'Kawasaki') !== false)  $placeholder_text = 'KAWASAKI';
                                        elseif (stripos($title, 'Suzuki') !== false)    $placeholder_text = 'SUZUKI';
                                        else $placeholder_text = 'MOTOWOW';
                                    }

                                    // Hardcoded category since this page is strictly for new models
                                    $cat       = 'New Model';
                                    $cat_class = 'news-badge--new';

                                    $parts        = explode(' - ', $title);
                                    $source       = array_pop($parts);
                                    $clean_title  = implode(' - ', $parts);
                                    $display_date = date('jS M Y', strtotime($raw_date));

                                    $img_html = !empty($image_url)
                                        ? "<img src='$image_url' alt='$clean_title' loading='lazy'>"
                                        : "<span class='news-card__img-placeholder'>$placeholder_text</span>";

                                    echo "
                                    <article class='news-card'>
                                        <a href='$link' target='_blank' class='news-card__img-link'>
                                            <div class='news-card__img'>$img_html</div>
                                        </a>
                                        <div class='news-card__body'>
                                            <span class='news-badge $cat_class'>$cat</span>
                                            <a href='$link' target='_blank' class='news-card__title'>$clean_title</a>
                                            <div class='news-card__meta'>
                                                <span class='news-card__source'>$source</span>
                                                <span class='news-card__date'>$display_date</span>
                                            </div>
                                            <a href='$link' target='_blank' class='news-card__external'>
                                                <svg viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2.5' stroke-linecap='round' stroke-linejoin='round' width='16' height='16'>
                                                    <path d='M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6'></path>
                                                    <polyline points='15 3 21 3 21 9'></polyline>
                                                    <line x1='10' y1='14' x2='21' y2='3'></line>
                                                </svg>
                                            </a>
                                        </div>
                                    </article>";

                                    $count++;
                                }
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <div>
        <?php include __DIR__ . '/../../includes/footer.php'; ?>
    </div>
</body>
</html>