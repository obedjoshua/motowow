<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advice & Guides — Motor News</title>
    <link rel="stylesheet" href="../../ref/css/main.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../ref/css/news.css?v=<?php echo time(); ?>">
    
    <style>
        .news-hero--advice {
            background: black;
        }
        
        .news-hero--advice .news-hero__title,
        .news-hero--advice .news-hero__subtitle,
        .news-hero--advice .news-breadcrumb,
        .news-hero--advice .news-breadcrumb a {
            color: var(--color-white-pure, #ffffff);
            text-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }

        .news-hero--advice .news-breadcrumb a:hover {
            color: #dbeafe;
        }

        .guide-section {
            padding: 60px 20px 40px;
            max-width: 1000px;
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

        .guide-stack {
            display: flex;
            flex-direction: column;
            gap: 24px;
        }

        .guide-card {
            background: var(--color-white-pure, #ffffff);
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
            border: 1px solid #eaeaea;
            overflow: hidden;
            transition: box-shadow 0.3s ease;
        }

        .guide-card:hover {
            box-shadow: 0 8px 30px rgba(0,0,0,0.08);
        }

        .guide-summary {
            list-style: none;
            padding: 24px 32px;
            display: flex;
            align-items: center;
            gap: 20px;
            cursor: pointer;
            background: #ffffff;
            transition: background-color 0.2s ease;
        }

        .guide-summary::-webkit-details-marker {
            display: none; /* Hide default triangle */
        }

        .guide-summary:hover {
            background-color: #f8fafc;
        }

        .guide-icon {
            width: 56px;
            height: 56px;
            background: #dbeafe;
            color: #1e40af;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .guide-summary-text {
            flex-grow: 1;
        }

        .guide-summary-text h3 {
            font-family: var(--font-bold);
            font-size: 1.4rem;
            color: var(--color-dark);
            margin: 0 0 6px;
        }

        .guide-summary-text p {
            font-family: var(--font-regular);
            font-size: 1rem;
            color: var(--color-grey);
            margin: 0;
        }

        .guide-chevron {
            width: 24px;
            height: 24px;
            fill: none;
            stroke: #1e40af;
            stroke-width: 2.5;
            stroke-linecap: round;
            stroke-linejoin: round;
            transition: transform 0.3s ease;
        }

        .guide-card[open] .guide-chevron {
            transform: rotate(180deg);
        }

        .guide-content {
            padding: 32px;
            border-top: 1px solid #eaeaea;
            font-family: var(--font-regular);
            font-size: 1.05rem;
            color: var(--color-dark);
            line-height: 1.7;
            background: #ffffff;
        }

        .guide-content h4 {
            font-family: var(--font-bold);
            font-size: 1.2rem;
            margin: 24px 0 12px;
            color: #1e40af;
        }

        .guide-content h4:first-child {
            margin-top: 0;
        }

        .guide-content p {
            margin: 0 0 16px;
        }

        .guide-content ul, .guide-content ol {
            margin: 0 0 20px 24px;
            padding: 0;
        }

        .guide-content li {
            margin-bottom: 8px;
        }

        /* ── Carwow-Style FAQ Section (NO JS) ── */
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

        .faq-answer p { margin: 0 0 16px 0; }
        .faq-answer p:last-child { margin: 0; }

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
            background-color: #26e8e8; /* Cyan matching the Carwow button */
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
            <div class="news-hero news-hero--advice">
                <h1 class="news-hero__title">Advice & Guides</h1>
                <p class="news-hero__subtitle">Comprehensive ownership advice, basic maintenance tutorials, and legal guidelines to elevate your motorcycle experience.</p>
            </div>
        </div>

        <section class="guide-section">
            <div class="guide-section__header">
                <h2>Essential Ownership Guides</h2>
                <p>Expand the cards below to read our full, in-depth tutorials on maintaining and legally operating your motorcycle.</p>
            </div>

            <div class="guide-stack">
                
                <details class="guide-card">
                    <summary class="guide-summary">
                        <div class="guide-icon">
                            <svg viewBox="0 0 24 24" width="32" height="32" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path></svg>
                        </div>
                        <div class="guide-summary-text">
                            <h3>The Pre-Ride Inspection Checklist (T-CLOCS)</h3>
                            <p>Never ride blind. Master the essential checks you must perform before starting your engine to ensure maximum safety on the road.</p>
                        </div>
                        <svg class="guide-chevron" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </summary>
                    <div class="guide-content">
                        <h4>T - Tires and Wheels</h4>
                        <p>Check the tire pressure (PSI) while the tires are cold. Look for cuts, embedded nails, or severe tread wear. Ensure your rims are not bent and, if applicable, that your spokes are tight.</p>
                        <h4>C - Controls</h4>
                        <p>Check your levers (clutch and front brake) to ensure they aren't bent or broken. Test the throttle—it should snap back shut smoothly when released. Inspect cables for fraying.</p>
                        <h4>L - Lights and Electrics</h4>
                        <p>Turn the key and test your high beam, low beam, left and right turn signals, horn, and both the front and rear brake light switches. Do not ride if your brake light is malfunctioning.</p>
                        <h4>O - Oil and Other Fluids</h4>
                        <p>Check the engine oil level using the dipstick or sight glass. Look beneath the motorcycle for any signs of leaking oil, coolant, or brake fluid.</p>
                        <h4>C - Chassis</h4>
                        <p>Inspect the frame, suspension, and chain. Push down on the front forks to ensure they compress and rebound smoothly without leaking oil. Ensure the drive chain is lubricated and has the correct amount of slack.</p>
                        <h4>S - Stands</h4>
                        <p>Check that the side stand and center stand retract fully and are held firmly in place by their springs. A dragging side stand can cause a fatal crash on a left turn.</p>
                    </div>
                </details>

                <details class="guide-card">
                    <summary class="guide-summary">
                        <div class="guide-icon">
                            <svg viewBox="0 0 24 24" width="32" height="32" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                        </div>
                        <div class="guide-summary-text">
                            <h3>LTO Registration & Renewal Process</h3>
                            <p>A complete, step-by-step walkthrough of the emission testing process, insurance fees, and securing your updated OR/CR without falling victim to fixers.</p>
                        </div>
                        <svg class="guide-chevron" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </summary>
                    <div class="guide-content">
                        <h4>Step 1: Know Your Renewal Schedule</h4>
                        <p>Your renewal month is determined by the last digit of your plate number (e.g., 1 is January, 0 is October). The specific week is determined by the second-to-the-last digit. Renewing late will result in a weekly penalty fee.</p>
                        <h4>Step 2: Secure CTPL Insurance</h4>
                        <p>You must purchase Compulsory Third Party Liability (CTPL) insurance. This usually costs between ₱250 to ₱300. You can get this online via LTMS or at insurance kiosks near the LTO branch.</p>
                        <h4>Step 3: Private Emission Testing Center (PETC)</h4>
                        <p>Bring your motorcycle to an LTO-accredited emission testing center. Present your old OR/CR. If your motorcycle passes, you will receive a Certificate of Emission Compliance (CEC). The result is automatically uploaded to the LTO system.</p>
                        <h4>Step 4: LTO Motor Vehicle Inspection (MVIR)</h4>
                        <p>Proceed to the LTO branch. An inspector will visually verify your engine and chassis number (stenciling) and check if your lights, horn, and signals work. Remove any illegal modifications (like open pipes or strobing lights) beforehand.</p>
                        <h4>Step 5: Payment and Releasing</h4>
                        <p>Submit your documents (Old OR/CR, CTPL, CEC, and MVIR) to the evaluator. Wait for your name to be called at the cashier to pay the Motor Vehicle User's Charge (MVUC). Keep your new Official Receipt (OR) safe.</p>
                    </div>
                </details>

                <details class="guide-card">
                    <summary class="guide-summary">
                        <div class="guide-icon">
                            <svg viewBox="0 0 24 24" width="32" height="32" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10v6M2 10l10-5 10 5-10 5z"></path><path d="M6 12v5c3 3 9 3 12 0v-5"></path></svg>
                        </div>
                        <div class="guide-summary-text">
                            <h3>Philippine Expressway Rules & The 400cc Law</h3>
                            <p>Everything you need to know about legally riding on NLEX, SLEX, Skyway, and other controlled-access highways in the Philippines.</p>
                        </div>
                        <svg class="guide-chevron" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </summary>
                    <div class="guide-content">
                        <h4>The 400cc Displacement Rule</h4>
                        <p>Under current Philippine law (Republic Act No. 2000), only motorcycles with an engine displacement of exactly <strong>400cc or higher</strong> are allowed on limited-access facilities (tollways). The tollway operators enforce this strictly by checking the displacement indicated on your Official Receipt/Certificate of Registration (OR/CR).</p>
                        <h4>Getting Your RFIDs</h4>
                        <p>You cannot pay cash at many toll booths anymore. You must install:</p>
                        <ul>
                            <li><strong>Easytrip:</strong> Used for NLEX, SCTEX, CAVITEX, and CALAX.</li>
                            <li><strong>Autosweep:</strong> Used for SLEX, Skyway, NAIAX, STAR Tollway, and TPLEX.</li>
                        </ul>
                        <p>Bring your motorcycle and a photocopy of your OR/CR to an installation site. The RFID sticker will usually be placed on your motorcycle's headlight or visor.</p>
                        <h4>Expressway Etiquette and Safety</h4>
                        <ol>
                            <li><strong>Speed Limits:</strong> The minimum speed limit is 60 kph, and the maximum is usually 100 kph. </li>
                            <li><strong>Lane Discipline:</strong> Keep right unless overtaking. The leftmost lane is strictly a passing lane.</li>
                            <li><strong>Wind Blast:</strong> Be prepared for heavy crosswinds on elevated highways like the Skyway. Grip the tank with your knees, not the handlebars.</li>
                            <li><strong>No Filtering:</strong> Lane splitting or filtering between cars at high speeds on the expressway is highly dangerous and can result in reckless driving citations.</li>
                        </ol>
                    </div>
                </details>
            </div>
        </section>

        <section class="faq-wrapper">
            <div class="faq-inner">
                <h2 class="faq-main-title">EVERYTHING YOU NEED TO KNOW</h2>
                
                <div class="faq-card">
                    
                    <details class="faq-item">
                        <summary class="faq-question">
                            1. How often should I change my motorcycle's engine oil?
                            <svg class="faq-icon" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </summary>
                        <div class="faq-answer">
                            <p>For standard 110cc-155cc scooters used daily, change the oil every 1,500 to 2,000 km. For big bikes using fully synthetic oil, every 3,000 to 5,000 km is acceptable. Always check your owner's manual.</p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary class="faq-question">
                            2. Are modified exhausts (open pipes) legal?
                            <svg class="faq-icon" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </summary>
                        <div class="faq-answer">
                            <p>Nationally, exhaust noise must not exceed 99 decibels at 2,000-2,500 RPM. However, many local governments (LGUs) have strict city ordinances completely banning aftermarket exhausts. Stock is always safest.</p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary class="faq-question">
                            3. What are the rules for auxiliary lights (MDL)?
                            <svg class="faq-icon" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </summary>
                        <div class="faq-answer">
                            <p>You may install a maximum of 2 supplementary lights (max 6 bulbs each). They must be wired to a separate switch, directed downwards, mounted no higher than the handlebars, and emit white or yellowish-white light.</p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary class="faq-question">
                            4. Can I drive a motorcycle with a Student Permit?
                            <svg class="faq-icon" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </summary>
                        <div class="faq-answer">
                            <p>Yes, but ONLY if accompanied by a licensed rider possessing a Non-Pro or Pro license with the correct motorcycle restriction code. Driving alone will result in a hefty fine and impounding.</p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary class="faq-question">
                            5. What are the helmet laws in the Philippines?
                            <svg class="faq-icon" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </summary>
                        <div class="faq-answer">
                            <p>Under RA 10054, all riders and pillions must wear standard protective motorcycle helmets bearing the Philippine Standard (PS) mark or Import Commodity Clearance (ICC) sticker. Bicycle or construction helmets are illegal.</p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary class="faq-question">
                            6. Can I wear slippers or sandals while riding?
                            <svg class="faq-icon" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </summary>
                        <div class="faq-answer">
                            <p>No. LTO regulations explicitly prohibit driving a motorcycle while wearing slippers, flip-flops, or bare feet. You must wear closed-toe shoes. Violators face a fine.</p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary class="faq-question">
                            7. What is the fine for not wearing a helmet?
                            <svg class="faq-icon" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </summary>
                        <div class="faq-answer">
                            <p>The fine for riding without a helmet is Php 1,500 for the first offense, Php 3,000 for the second, Php 5,000 for the third, and Php 10,000 plus confiscation of the driver's license for subsequent offenses.</p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary class="faq-question">
                            8. What is the Anti-Distracted Driving Act?
                            <svg class="faq-icon" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </summary>
                        <div class="faq-answer">
                            <p>You cannot use a mobile phone or device while riding or even while stopped at a red light. Phones must be mounted securely on the handlebars using a holder, and operation must be done hands-free.</p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary class="faq-question">
                            9. Are top boxes legal? Do they need registration?
                            <svg class="faq-icon" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </summary>
                        <div class="faq-answer">
                            <p>Top boxes are legal and do not require separate LTO registration as long as they are securely attached, do not exceed the width of the handlebars, and can only carry a maximum of two full-face helmets.</p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary class="faq-question">
                            10. Is lane splitting or filtering legal?
                            <svg class="faq-icon" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </summary>
                        <div class="faq-answer">
                            <p>Lane filtering (moving through stopped traffic at a red light) is generally tolerated. However, lane splitting at high speeds on moving highways can result in apprehension for Reckless Driving.</p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary class="faq-question">
                            11. What are the rules for pillion riding (angkas)?
                            <svg class="faq-icon" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </summary>
                        <div class="faq-answer">
                            <p>You may only carry one passenger. They must sit on the dedicated passenger seat behind the rider, use the footpegs, and wear a standard ICC/PS helmet.</p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary class="faq-question">
                            12. Can a child ride on a motorcycle?
                            <svg class="faq-icon" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </summary>
                        <div class="faq-answer">
                            <p>Under the Children's Safety on Motorcycles Act, a child can only ride if their feet can comfortably reach the footpegs, their arms can reach around the driver's waist, and they are wearing a standard helmet.</p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary class="faq-question">
                            13. How long does a motorcycle battery last?
                            <svg class="faq-icon" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </summary>
                        <div class="faq-answer">
                            <p>A typical motorcycle battery lasts between 2 to 4 years. Frequent short trips, installing too many electrical accessories, or leaving the bike unused for weeks can shorten its lifespan.</p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary class="faq-question">
                            14. How often should I lubricate my chain?
                            <svg class="faq-icon" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </summary>
                        <div class="faq-answer">
                            <p>Clean and lubricate your motorcycle chain every 500 to 1,000 kilometers, or immediately after riding in heavy rain. A dry chain will stretch quickly and snap.</p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary class="faq-question">
                            15. How often should I check my tire pressure?
                            <svg class="faq-icon" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </summary>
                        <div class="faq-answer">
                            <p>You should check your tire pressure at least once a week, or before any long ride. Under-inflated tires cause sluggish handling and poor fuel economy, while over-inflated tires reduce grip.</p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary class="faq-question">
                            16. What should I do if I get into an accident?
                            <svg class="faq-icon" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </summary>
                        <div class="faq-answer">
                            <p>Move to a safe area if possible, check for injuries, take photos of the vehicles and license plates, and call local traffic enforcers or police to file a blotter report. Do not leave the scene until authorized.</p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary class="faq-question">
                            17. What documents do I need to carry while riding?
                            <svg class="faq-icon" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </summary>
                        <div class="faq-answer">
                            <p>You must always carry your valid physical Driver's License and a photocopy of your motorcycle's most recent Official Receipt (OR) and Certificate of Registration (CR).</p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary class="faq-question">
                            18. Can my motorcycle be impounded for loud exhaust?
                            <svg class="faq-icon" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </summary>
                        <div class="faq-answer">
                            <p>Yes. Depending on the specific local city ordinance, driving with an excessively loud open pipe can result in an immediate fine and the impounding of the motorcycle until the stock pipe is reinstalled.</p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary class="faq-question">
                            19. Is an engine guard or crash bar illegal?
                            <svg class="faq-icon" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </summary>
                        <div class="faq-answer">
                            <p>No, engine guards and crash bars are considered safety accessories and are completely legal, provided they do not stick out excessively far and pose a hazard to pedestrians or other vehicles.</p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary class="faq-question">
                            20. Do I need to register a change of color with LTO?
                            <svg class="faq-icon" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </summary>
                        <div class="faq-answer">
                            <p>Yes. If you paint your motorcycle or apply a full-body wrap in a color different from what is stated on your CR, you must apply for a Change of Color at the LTO to avoid apprehension.</p>
                        </div>
                    </details>

                </div>

                <div class="faq-footer">
                    <h3>Have a specific mechanical issue?</h3>
                    <p>Our experts can help you troubleshoot.</p>
                    <a href="#" class="faq-btn">Ask the Community</a>
                </div>

            </div>
        </section>

    </main>

    <div>
        <?php include __DIR__ . '/../../includes/footer.php'; ?>
    </div>
</body>
</html>