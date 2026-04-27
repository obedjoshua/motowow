<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motor News — Motowow</title>
    <link rel="stylesheet" href="../../ref/css/main.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../ref/css/news.css?v=<?php echo time(); ?>">
</head>
<body>
    <div>
        <?php include __DIR__ . '/../../includes/header.php'; ?>
    </div>

    <main class="news-page">

        <!-- ── Hero ── -->
        <div class="news-hero-wrapper">
            <div class="news-hero__image-left">
                <img src="../../assets/images/news-left.png" alt="" draggable="false">
            </div>
            <div class="news-hero">
                <nav class="news-breadcrumb">
                    <a href="../../index.php">Home</a>
                    <span>›</span>
                    <span>News</span>
                </nav>
                <h1 class="news-hero__title">Motor News</h1>
                <p class="news-hero__subtitle">Read the latest motorcycle news from Motowow. Get the most up to date stories, analysis and opinion from our team of experts.</p>
            </div>
            <div class="news-hero__image-right">
                <img src="../../assets/images/news-right.png" alt="" draggable="false">
            </div>
        </div>

        <!-- ── Latest Articles ── -->
        <section class="news-section">
            <div class="news-section__inner">
                <h2 class="news-section__heading">Latest articles</h2>

                <div class="news-carousel-wrapper">
                    <button class="news-carousel__arrow news-carousel__arrow--prev" onclick="scrollNews(-1)" aria-label="Previous">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="14" height="14" fill="currentColor">
                            <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"/>
                        </svg>
                    </button>

                    <div class="news-grid" id="news-grid">
                        <?php
                        // --- DUCKDUCKGO IMAGE FETCHER FUNCTION ---
                        function getFirstDDGImage($query) {
                            $query = urlencode($query . " motorcycle philippines 2026");
                            
                            // A. Get the 'vqd' token
                            $ch = curl_init("https://duckduckgo.com/?q=$query");
                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                            curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0');
                            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                            $html = curl_exec($ch);
                            
                            preg_match('/vqd=([\d-]+)&/', $html, $matches);
                            if (!isset($matches[1])) return null;
                            $vqd = $matches[1];

                            // B. Search for the actual image
                            $searchUrl = "https://duckduckgo.com/i.js?q=$query&vqd=$vqd&f=,,,";
                            curl_setopt($ch, CURLOPT_URL, $searchUrl);
                            $json = curl_exec($ch);
                            curl_close($ch);

                            $data = json_decode($json, true);
                            return $data['results'][0]['image'] ?? null;
                        }

                        $exclude = '-accident -crash -killed -dead -injury -incident -victim -police -fire';
                        $include = 'motorcycle philippines (launch OR "new model" OR "price hike" OR update OR repo OR auction)';
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
                                    if ($count >= 9) break;
                                    
                                    $raw_date = (string)$item->pubDate;
                                    if (strpos($raw_date, '2026') === false) continue;

                                    $title       = (string)$item->title;
                                    $description = (string)$item->description;
                                    $link        = (string)$item->link;
                                    $title_lower = strtolower($title);

                                    // Blocklist filter
                                    $blocklist = ['accident','crash','dead','killed','injury','fire','theft','stolen'];
                                    foreach ($blocklist as $word) {
                                        if (strpos($title_lower, $word) !== false) continue 2;
                                    }

                                    // Smart image discovery - try RSS first, then fallback to DuckDuckGo
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
                                    // Fallback to DuckDuckGo if no image found
                                    if (empty($image_url)) {
                                        $image_url = getFirstDDGImage($title);
                                    }

                                    $placeholder_text = '';
                                    if (empty($image_url)) {
                                        if (stripos($title, 'Honda') !== false)    $placeholder_text = 'HONDA';
                                        elseif (stripos($title, 'Yamaha') !== false)    $placeholder_text = 'YAMAHA';
                                        elseif (stripos($title, 'Kawasaki') !== false)  $placeholder_text = 'KAWASAKI';
                                        elseif (stripos($title, 'Suzuki') !== false)    $placeholder_text = 'SUZUKI';
                                        else $placeholder_text = 'MOTOWOW';
                                    }

                                    // Category
                                    $cat       = 'Update';
                                    $cat_class = 'news-badge--update';
                                    if (preg_match('/repo|auction|second/', $title_lower))          { $cat = 'Resell';      $cat_class = 'news-badge--resell'; }
                                    elseif (preg_match('/price|srp|hike|increase/', $title_lower))  { $cat = 'Price Alert'; $cat_class = 'news-badge--price';  }
                                    elseif (preg_match('/new|launch|unveil|reveal/', $title_lower)) { $cat = 'New Model';   $cat_class = 'news-badge--new';    }

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

                    <button class="news-carousel__arrow news-carousel__arrow--next" onclick="scrollNews(1)" aria-label="Next">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="14" height="14" fill="currentColor">
                            <path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/>
                        </svg>
                    </button>
                </div>

                <!-- ── Subcategories ── -->
                <div class="news-subcategories">
                    <h2 class="news-section__heading">Subcategories</h2>
                    <div class="news-subcat-grid">

                        <a href="../news-subcat-pages/motowow-newsroom.php" class="news-subcat-card news-subcat-card--branded">
                            <div class="news-subcat-card__img">
                                <img src="../../assets/images/subcat-motowow.png" alt="Motowow newsroom">
                            </div>
                            <div class="news-subcat-card__overlay">
                                <span class="news-subcat-card__label">Motowow newsroom</span>
                                <span class="news-subcat-card__arrow">›</span>
                            </div>
                        </a>

                        <a href="#" class="news-subcat-card">
                            <div class="news-subcat-card__img">
                                <img src="../../assets/images/subcat-new.jpg" alt="New models">
                            </div>
                            <div class="news-subcat-card__overlay">
                                <span class="news-subcat-card__label">New models</span>
                                <span class="news-subcat-card__arrow">›</span>
                            </div>
                        </a>

                        <a href="#" class="news-subcat-card">
                            <div class="news-subcat-card__img">
                                <img src="../../assets/images/subcat-price.jpg" alt="Price alerts">
                            </div>
                            <div class="news-subcat-card__overlay">
                                <span class="news-subcat-card__label">Price alerts</span>
                                <span class="news-subcat-card__arrow">›</span>
                            </div>
                        </a>

                        <a href="#" class="news-subcat-card">
                            <div class="news-subcat-card__img">
                                <img src="../../assets/images/subcat-resell.jpg" alt="Resell and auction">
                            </div>
                            <div class="news-subcat-card__overlay">
                                <span class="news-subcat-card__label">Resell &amp; auction</span>
                                <span class="news-subcat-card__arrow">›</span>
                            </div>
                        </a>

                        <a href="#" class="news-subcat-card">
                            <div class="news-subcat-card__img">
                                <img src="../../assets/images/subcat-reviews.jpg" alt="Reviews">
                            </div>
                            <div class="news-subcat-card__overlay">
                                <span class="news-subcat-card__label">Reviews</span>
                                <span class="news-subcat-card__arrow">›</span>
                            </div>
                        </a>

                        <a href="#" class="news-subcat-card">
                            <div class="news-subcat-card__img">
                                <img src="../../assets/images/subcat-guides.avif" alt="Buying guides">
                            </div>
                            <div class="news-subcat-card__overlay">
                                <span class="news-subcat-card__label">Buying guides</span>
                                <span class="news-subcat-card__arrow">›</span>
                            </div>
                        </a>

                    </div>
                </div>

            </div>
        </section>

    </main>

    <script>
        function scrollNews(dir) {
            const grid = document.getElementById('news-grid');
            grid.scrollBy({ left: dir * 380, behavior: 'smooth' });
        }
    </script>
    <div>
        <?php include __DIR__ . '/../../includes/footer.php'; ?>
    </div>
</body>
</html>