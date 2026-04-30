<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy — Motowow</title>
    <link rel="stylesheet" href="../../ref/css/main.css?v=<?php echo time(); ?>">
    
    <style>
        /* ── Exact Replica Layout ── */
        body {
            background-color: #f4f4f5; /* Light grey/off-white background */
            margin: 0;
            padding: 0;
        }

        .legal-page {
            background-color: #f4f4f5;
            padding: 60px 0 100px; 
            min-height: 100vh;
        }

        .legal-container {
            max-width: 780px; /* Constrained width to match the image proportion */
            margin: 0 auto;
            padding: 0 20px;
        }

        /* ── Main Title ── */
        .legal-main-title {
            font-family: var(--font-caps, 'Impact', system-ui, sans-serif);
            font-size: 3.2rem;
            color: #000000;
            margin: 0 0 50px;
            line-height: 1;
            letter-spacing: -0.02em;
            text-transform: uppercase;
            text-align: center;
        }

        /* ── Intro Text ── */
        .legal-intro {
            font-family: var(--font-regular, system-ui, sans-serif);
            font-size: 1rem;
            color: #000000;
            line-height: 1.6;
            margin-bottom: 40px;
            text-align: left;
        }

        .legal-intro p {
            margin: 0 0 20px 0;
        }

        /* ── Unified Accordion Box (NO JS) ── */
        .policy-accordion-wrapper {
            background-color: #ffffff;
            border-radius: 6px;
            border: 1px solid #d1d5db; /* Light grey border matching the image */
            overflow: hidden;
            margin-bottom: 50px;
        }

        .policy-item {
            border-bottom: 1px solid #d1d5db;
        }

        .policy-item:last-child {
            border-bottom: none;
        }

        /* Summary tag hides the default triangle */
        .policy-question {
            list-style: none;
            padding: 16px 20px;
            font-family: var(--font-bold, system-ui, sans-serif);
            font-size: 1rem;
            color: #000000;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #ffffff;
        }

        .policy-question::-webkit-details-marker {
            display: none;
        }

        .policy-question:hover {
            background-color: #fafafa;
        }

        /* Custom Chevron Icon */
        .policy-icon {
            width: 14px;
            height: 14px;
            fill: none;
            stroke: #000000;
            stroke-width: 3;
            stroke-linecap: round;
            stroke-linejoin: round;
            transition: transform 0.2s ease;
            flex-shrink: 0;
            margin-left: 15px;
        }

        /* Rotate chevron up when open */
        .policy-item[open] .policy-icon {
            transform: rotate(180deg);
        }

        /* ── Dropdown Content Styles ── */
        .policy-answer {
            padding: 0 20px 20px 20px;
            font-family: var(--font-regular, system-ui, sans-serif);
            font-size: 0.95rem;
            color: #000000;
            line-height: 1.6;
            text-align: left;
        }

        .policy-answer p {
            margin: 0 0 16px 0;
        }

        .policy-answer p:last-child {
            margin: 0;
        }

        .policy-answer ul {
            margin: 0 0 16px 24px;
            padding: 0;
            list-style-type: disc;
        }

        .policy-answer li {
            margin-bottom: 8px;
            padding-left: 4px;
        }

        .policy-answer a {
            color: #000000;
            text-decoration: underline;
        }

        /* ── Last Updated Text ── */
        .last-updated {
            font-family: var(--font-regular, system-ui, sans-serif);
            font-size: 0.95rem;
            color: #000000;
            text-align: left;
            display: block;
        }
    </style>
</head>
<body>
    <div>
        <?php include __DIR__ . '/../../includes/header.php'; ?>
    </div>

    <main class="legal-page">
        <div class="legal-container">
            
            <h1 class="legal-main-title">MOTOWOW PRIVACY POLICY</h1>

            <div class="legal-intro">
                <p>motowow.ph provides an online service owned and operated by Motowow Ltd or its subsidiary companies (“Motowow”, “we” or “us”). Please take the time to review this privacy statement which explains the information that Motowow collects about you, how we use it, and your rights in relation to that information.</p>
                <p>Motowow Ltd of MotoHub San Ildefonso, Bulacan, Republic of the Philippines is the data controller of the personal information collected via or in connection with our websites (motowow.ph) and our app (the “sites”).</p>
            </div>

            <div class="policy-accordion-wrapper">
                
                <details class="policy-item">
                    <summary class="policy-question">
                        1. What personal information do we collect about you?
                        <svg class="policy-icon" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </summary>
                    <div class="policy-answer">
                        <p>We collect personal information that you voluntarily provide to us when registering on the platform, expressing an interest in obtaining information about our products, or participating in the resell marketplace. This includes names, email addresses, phone numbers, and vehicle registration documents if verifying a seller account.</p>
                    </div>
                </details>

                <details class="policy-item">
                    <summary class="policy-question">
                        2. Motorcycle Dealerships, Manufacturers, Brokers and Job Applicants
                        <svg class="policy-icon" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </summary>
                    <div class="policy-answer">
                        <p>If you represent a dealership, manufacturer, or broker, we collect business contact details, company registration information, and licensing documents to verify your business identity and facilitate your use of our dealer-specific services.</p>
                    </div>
                </details>

                <details class="policy-item">
                    <summary class="policy-question">
                        3. What do we use this personal information for?
                        <svg class="policy-icon" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </summary>
                    <div class="policy-answer">
                        <p>We process your personal information to facilitate account creation, fulfill and manage your requests (such as vehicle inquiries), send administrative information, and protect our platform from fraud.</p>
                    </div>
                </details>

                <details class="policy-item">
                    <summary class="policy-question">
                        4. Our basis for processing under Philippine data protection law
                        <svg class="policy-icon" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </summary>
                    <div class="policy-answer">
                        <p>Our processing of your personal data is based on our legitimate business interests, the fulfillment of our contract with you, compliance with our legal obligations under the Data Privacy Act of 2012, and/or your explicit consent.</p>
                    </div>
                </details>

                <details class="policy-item">
                    <summary class="policy-question">
                        5. Marketing & Advertising
                        <svg class="policy-icon" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </summary>
                    <div class="policy-answer">
                        <p>We will send you marketing communications if you have requested information from us or registered for services like price alerts. You can ask us to stop sending you marketing messages at any time by adjusting your account preferences or using the opt-out links provided in our emails.</p>
                    </div>
                </details>

                <details class="policy-item">
                    <summary class="policy-question">
                        6. Who do we share this personal information with and who we might pass your phone number to?
                        <svg class="policy-icon" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </summary>
                    <div class="policy-answer">
                        <p>We may share your contact details with authorized partner dealerships if you request a vehicle quotation. If you list a motorcycle for sale, your chosen contact details will be visible to potential buyers on the platform.</p>
                    </div>
                </details>

                <details class="policy-item">
                    <summary class="policy-question">
                        7. Storage and Deletion
                        <svg class="policy-icon" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </summary>
                    <div class="policy-answer">
                        <p>We keep your personal information only for as long as is necessary for the purposes set out in this privacy policy. Once we have no ongoing legitimate business need to process your personal information, we will delete or anonymize it.</p>
                    </div>
                </details>

                <details class="policy-item">
                    <summary class="policy-question">
                        8. Users under 18
                        <svg class="policy-icon" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </summary>
                    <div class="policy-answer">
                        <p>Our platform is not intended for use by individuals under the age of 18. We do not knowingly collect personal data from minors without verifiable parental consent.</p>
                    </div>
                </details>

                <details class="policy-item">
                    <summary class="policy-question">
                        9. Cookies
                        <svg class="policy-icon" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </summary>
                    <div class="policy-answer">
                        <p>We use cookies and similar tracking technologies to access or store information, analyze website traffic, and personalize your experience. You can manage your cookie preferences through your browser settings.</p>
                    </div>
                </details>

                <details class="policy-item">
                    <summary class="policy-question">
                        10. Your rights
                        <svg class="policy-icon" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </summary>
                    <div class="policy-answer">
                        <p>Under the Data Privacy Act of 2012, you have the right to be informed, access, rectify, or request the erasure of your personal data. You may update your account profile or contact us directly to exercise these rights.</p>
                    </div>
                </details>

                <details class="policy-item">
                    <summary class="policy-question">
                        11. Contact us
                        <svg class="policy-icon" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </summary>
                    <div class="policy-answer">
                        <p>If you have questions about this policy or our privacy practices, please contact our Data Protection Officer at privacy@motowow.ph.</p>
                    </div>
                </details>

            </div>

            <span class="last-updated">Last updated April 2026</span>

        </div>
    </main>

    <div>
        <?php include __DIR__ . '/../../includes/footer.php'; ?>
    </div>
</body>
</html>