<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms and Conditions — Motowow</title>
    <link rel="stylesheet" href="../../ref/css/main.css?v=<?php echo time(); ?>">
    
    <style>
        /* ── Strict Legal Document Layout ── */
        body {
            background-color: #ffffff;
        }

        .legal-page {
            background-color: #ffffff;
            padding: 60px 0 100px;
        }

        .legal-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .legal-main-title {
            font-family: var(--font-bold, system-ui, sans-serif);
            font-size: 2rem;
            color: #000000;
            margin: 0 0 40px;
            text-transform: uppercase;
            text-align: left;
            line-height: 1.2;
            border-bottom: 2px solid #000000;
            padding-bottom: 20px;
        }

        .legal-content {
            font-family: var(--font-regular, system-ui, sans-serif);
            color: #000000;
            line-height: 1.6;
            font-size: 0.95rem;
            text-align: justify;
        }

        .legal-content section {
            margin-bottom: 40px;
        }

        .legal-content h2 {
            font-family: var(--font-bold, system-ui, sans-serif);
            font-size: 1.15rem;
            color: #000000;
            margin: 0 0 20px;
            text-transform: uppercase;
        }

        /* Hanging Indent for Legal Clauses */
        .legal-clause {
            display: flex;
            align-items: flex-start;
            margin-bottom: 16px;
        }

        .legal-clause-num {
            font-family: var(--font-bold, system-ui, sans-serif);
            color: #000000;
            min-width: 45px;
            flex-shrink: 0;
        }

        .legal-clause-text {
            flex-grow: 1;
        }

        .legal-clause-text p {
            margin: 0 0 12px;
        }
        
        .legal-clause-text p:last-child {
            margin-bottom: 0;
        }

        .legal-content ul {
            margin: 10px 0 20px 20px;
            padding: 0;
            list-style-type: disc;
        }

        .legal-content ol {
            margin: 10px 0 20px 20px;
            padding: 0;
        }

        .legal-content li {
            margin-bottom: 8px;
            padding-left: 8px;
        }

        .legal-content strong {
            font-family: var(--font-bold, system-ui, sans-serif);
            color: #000000;
        }

        .legal-content a {
            color: #000000; 
            text-decoration: underline;
        }

        .legal-content a:hover {
            text-decoration: none;
        }

        .intro-text {
            font-weight: bold;
            margin-bottom: 40px;
            display: block;
            font-size: 1rem;
        }
        
        .update-date {
            font-style: italic;
            margin-bottom: 30px;
            display: block;
        }

        /* Table of Contents */
        .toc {
            border: 1px solid #cccccc;
            padding: 24px 28px;
            margin-bottom: 48px;
            background-color: #f9f9f9;
        }

        .toc-title {
            font-family: var(--font-bold, system-ui, sans-serif);
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            margin: 0 0 16px;
            color: #000000;
        }

        .toc ol {
            margin: 0;
            padding-left: 20px;
        }

        .toc li {
            font-size: 0.88rem;
            margin-bottom: 6px;
            padding-left: 4px;
        }

        .toc a {
            color: #333333;
            text-decoration: none;
        }

        .toc a:hover {
            text-decoration: underline;
        }

        /* Sub-clause indent */
        .sub-clause {
            display: flex;
            align-items: flex-start;
            margin: 8px 0 8px 45px;
        }

        .sub-clause-num {
            font-family: var(--font-regular, system-ui, sans-serif);
            color: #000000;
            min-width: 36px;
            flex-shrink: 0;
            font-style: italic;
        }

        .sub-clause-text {
            flex-grow: 1;
        }

        .notice-box {
            border-left: 3px solid #000000;
            padding: 12px 16px;
            margin: 16px 0;
            background-color: #f5f5f5;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <div>
        <?php include __DIR__ . '/../../includes/header.php'; ?>
    </div>

    <main class="legal-page">
        <div class="legal-container">
            
            <h1 class="legal-main-title">Terms and Conditions of Use</h1>
            
            <div class="legal-content">
                <span class="update-date">Last Updated: April 28, 2026</span>
                <span class="intro-text">Please read these Terms and Conditions of Use ("Terms") carefully and in their entirety before accessing, registering on, or otherwise using the Motowow platform. These Terms constitute a legally binding agreement between you and the operators of the Motowow platform. By accessing, browsing, or registering on this platform, you acknowledge that you have read, understood, and agree unconditionally to be bound by these Terms and all policies, guidelines, and supplementary rules incorporated herein by reference. If you do not agree to these Terms in full, you must immediately discontinue your use of the Platform.</span>

                <!-- TABLE OF CONTENTS -->
                <div class="toc">
                    <p class="toc-title">Table of Contents</p>
                    <ol>
                        <li><a href="#section-1">Interpretation and Definitions</a></li>
                        <li><a href="#section-2">Access and Account Registration</a></li>
                        <li><a href="#section-3">Nature of the Platform and Disclaimer of Liability</a></li>
                        <li><a href="#section-4">User Obligations and Marketplace Conduct</a></li>
                        <li><a href="#section-5">Listing Standards and Vehicle Documentation Requirements</a></li>
                        <li><a href="#section-6">Dealer and Business Accounts</a></li>
                        <li><a href="#section-7">Fees, Payments, and Premium Services</a></li>
                        <li><a href="#section-8">Buyer Protections and Due Diligence</a></li>
                        <li><a href="#section-9">Intellectual Property Rights</a></li>
                        <li><a href="#section-10">Privacy and Data Protection</a></li>
                        <li><a href="#section-11">Trust, Safety, and Reporting</a></li>
                        <li><a href="#section-12">Third-Party Links and Services</a></li>
                        <li><a href="#section-13">Limitation of Liability and Indemnification</a></li>
                        <li><a href="#section-14">Modifications to the Platform and Terms</a></li>
                        <li><a href="#section-15">Termination</a></li>
                        <li><a href="#section-16">Force Majeure</a></li>
                        <li><a href="#section-17">Governing Law and Jurisdiction</a></li>
                        <li><a href="#section-18">Miscellaneous Provisions</a></li>
                    </ol>
                </div>

                <!-- SECTION 1 -->
                <section id="section-1">
                    <h2>1. Interpretation and Definitions</h2>
                    <div class="legal-clause">
                        <span class="legal-clause-num">1.1.</span>
                        <div class="legal-clause-text">
                            <p><strong>"Platform"</strong> refers to the Motowow website accessible at its primary domain and all associated sub-domains, linked mobile applications (iOS and Android), application programming interfaces (APIs), and any other digital properties owned and operated by the Company that are connected to the centralized web-based marketplace for motorcycles.</p>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">1.2.</span>
                        <div class="legal-clause-text">
                            <p><strong>"Company"</strong>, "We", "Us", or "Our" refers to the operators and developers of Motowow, operating under the MotoHub San Ildefonso project umbrella, with principal offices based in Bulacan, Philippines, including its officers, directors, employees, agents, subsidiaries, and successors in interest.</p>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">1.3.</span>
                        <div class="legal-clause-text">
                            <p><strong>"User", "You", or "Your"</strong> refers to any individual, natural person, company, dealership, sole proprietorship, partnership, or other legal entity accessing or using the Platform in any capacity, including as a visitor, registered member, buyer, seller, or dealership account holder.</p>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">1.4.</span>
                        <div class="legal-clause-text">
                            <p><strong>"Listing"</strong> refers to any advertisement, post, classified entry, auction entry, or publication made by a User on the Platform concerning the sale, negotiation, auction, consignment, or transfer of a new, used, or repossessed motorcycle, including all images, descriptions, pricing, and supplementary documents attached thereto.</p>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">1.5.</span>
                        <div class="legal-clause-text">
                            <p><strong>"Seller"</strong> means any User who creates a Listing for the purpose of selling or transferring a motorcycle through the Platform, whether as a private individual or as a registered business or dealership.</p>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">1.6.</span>
                        <div class="legal-clause-text">
                            <p><strong>"Buyer"</strong> means any User who uses the Platform to browse, inquire about, or enter into negotiations with a Seller concerning the purchase of a motorcycle listed therein.</p>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">1.7.</span>
                        <div class="legal-clause-text">
                            <p><strong>"User Content"</strong> means any photographs, descriptions, videos, reviews, ratings, messages, or other material uploaded, submitted, or otherwise made available on the Platform by a User.</p>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">1.8.</span>
                        <div class="legal-clause-text">
                            <p><strong>"Verified Badge"</strong> refers to a visual indicator on a User profile or Listing, granted by the Company at its sole discretion, confirming that certain documentation or identity verification steps have been satisfactorily completed. A Verified Badge does not constitute an endorsement of a User or a warranty of any vehicle's condition or title.</p>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">1.9.</span>
                        <div class="legal-clause-text">
                            <p><strong>"LTO"</strong> refers to the Land Transportation Office of the Republic of the Philippines, the government agency responsible for the regulation of vehicles and their registration.</p>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">1.10.</span>
                        <div class="legal-clause-text">
                            <p><strong>"OR/CR"</strong> refers to the Official Receipt and Certificate of Registration issued by the LTO, which serve as the primary legal documents evidencing ownership and registration of a motor vehicle in the Philippines.</p>
                        </div>
                    </div>
                </section>

                <!-- SECTION 2 -->
                <section id="section-2">
                    <h2>2. Access and Account Registration</h2>
                    <div class="legal-clause">
                        <span class="legal-clause-num">2.1.</span>
                        <div class="legal-clause-text">
                            <p><strong>Eligibility.</strong> Access to and use of the Platform is restricted to individuals who are at least eighteen (18) years of age and possess full legal capacity to enter into binding contracts under the laws of the Republic of the Philippines. By registering for an account, you represent and warrant that you meet these eligibility requirements. The Company reserves the right to request proof of age or identity at any time.</p>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">2.2.</span>
                        <div class="legal-clause-text">
                            <p><strong>Registration Information.</strong> When creating an account, you agree to provide accurate, complete, and current information, including your full legal name, a valid and actively monitored email address, and a verifiable mobile phone number. You further agree to maintain and promptly update such information to keep it accurate and current at all times.</p>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">2.3.</span>
                        <div class="legal-clause-text">
                            <p><strong>One Account Per Person.</strong> Each individual or entity may maintain only one (1) registered account on the Platform. The creation of duplicate, multiple, or alternative accounts for the purpose of circumventing a previous suspension, ban, or restriction is strictly prohibited and may result in the permanent blocking of all associated accounts and devices.</p>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">2.4.</span>
                        <div class="legal-clause-text">
                            <p><strong>Account Credentials and Security.</strong> You are solely and exclusively responsible for maintaining the strict confidentiality of your login credentials, including your password, and for all activities occurring under your account. You agree to: (a) choose a strong and unique password; (b) not share your credentials with any third party; and (c) immediately notify the Company of any unauthorized use of your account or any other security breach. The Company shall not be liable for any loss or damage arising from your failure to comply with this obligation. Any activity conducted under your account will be irrefutably deemed to have been authorized by you, unless you have notified us in writing of a security breach prior to such activity.</p>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">2.5.</span>
                        <div class="legal-clause-text">
                            <p><strong>Third-Party Login.</strong> Where the Platform offers login via third-party services (e.g., Google, Facebook), you acknowledge that such logins are governed by the respective third party's terms and privacy policies. The Company is not responsible for the security, availability, or data practices of those third-party providers.</p>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">2.6.</span>
                        <div class="legal-clause-text">
                            <p><strong>Suspension and Termination of Access.</strong> We reserve the right, at our absolute discretion and without prior notice or liability, to suspend, disable, restrict, or permanently terminate your account and access to the Platform if we have reasonable grounds to believe that you have: (a) engaged in fraudulent, deceptive, or illegal activities; (b) violated any provision of these Terms; (c) created a risk or possible legal exposure for the Company; or (d) used the Platform in a manner inconsistent with its intended purpose. Any Listings posted by a suspended account may be removed without notice or compensation.</p>
                        </div>
                    </div>
                </section>

                <!-- SECTION 3 -->
                <section id="section-3">
                    <h2>3. Nature of the Platform and Disclaimer of Liability</h2>
                    <div class="legal-clause">
                        <span class="legal-clause-num">3.1.</span>
                        <div class="legal-clause-text">
                            <p><strong>Venue Only.</strong> The Platform acts purely as a centralized digital venue and marketplace infrastructure to facilitate connections between Buyers and Sellers of motorcycles. The Company does not take possession, ownership, or legal title to any vehicle listed on the Platform. The Company does not act as a broker, agent, representative, auctioneer, dealer, or consignee for either party in any transaction. All contracts for the sale or transfer of a vehicle are entered into exclusively and directly between the Buyer and the Seller. The Company is not a party to any such transaction.</p>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">3.2.</span>
                        <div class="legal-clause-text">
                            <p><strong>No Warranties on Vehicles.</strong> The Company makes absolutely no representations, warranties, or guarantees, express or implied, regarding the condition, safety, roadworthiness, completeness, accuracy of mileage, legal title, encumbrance status, registration validity, or any other characteristic of any motorcycle listed on the Platform. This includes, without limitation, any vehicle bearing a Verified Badge or any Listing that has been reviewed by a Company employee or automated system. Buyers are strongly advised and urged to perform thorough independent due diligence prior to any purchase, including but not limited to:</p>
                            <ul>
                                <li>Conducting an in-person physical inspection of the vehicle;</li>
                                <li>Verifying the authenticity of the OR/CR with the LTO;</li>
                                <li>Checking whether the vehicle's engine and chassis numbers match the documents;</li>
                                <li>Confirming that no outstanding bank loans, chattel mortgages, or other financial encumbrances exist on the vehicle;</li>
                                <li>Engaging a qualified and licensed motorcycle mechanic for a pre-purchase inspection.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">3.3.</span>
                        <div class="legal-clause-text">
                            <p><strong>"As-Is" Basis.</strong> The Platform and all content, tools, and information provided thereon are offered strictly on an "AS IS" and "AS AVAILABLE" basis, without any warranty of any kind, whether express, implied, statutory, or otherwise, including without limitation any implied warranties of merchantability, fitness for a particular purpose, non-infringement, or that the Platform will be uninterrupted, error-free, or secure.</p>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">3.4.</span>
                        <div class="legal-clause-text">
                            <p><strong>Disputes Between Users.</strong> In the event of a dispute, controversy, or claim between a Buyer and a Seller arising out of or related to a transaction, the Company encourages parties to resolve the matter amicably through direct communication. While the Company may, in its sole discretion and without any obligation, attempt to facilitate a resolution, it has no duty to do so and shall not be held responsible for the outcome of any such dispute. You hereby irrevocably release the Company and its officers, directors, agents, and employees from any and all claims, demands, and damages (actual, consequential, punitive, and exemplary) of every kind and nature arising out of or in any way connected with such disputes, including disputes arising from another User's use of the Platform.</p>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">3.5.</span>
                        <div class="legal-clause-text">
                            <p><strong>Price Information.</strong> Any price estimates, market valuations, or suggested prices displayed on the Platform are provided for informational reference only and do not constitute financial, legal, or professional advice. The Company does not guarantee the accuracy or reliability of such estimates and accepts no liability for decisions made in reliance on them.</p>
                        </div>
                    </div>
                </section>

                <!-- SECTION 4 -->
                <section id="section-4">
                    <h2>4. User Obligations and Marketplace Conduct</h2>
                    <div class="legal-clause">
                        <span class="legal-clause-num">4.1.</span>
                        <div class="legal-clause-text">
                            <p><strong>General Conduct.</strong> All Users agree to access and use the Platform in good faith, with honesty, and in a manner consistent with all applicable laws, rules, and regulations of the Republic of the Philippines, as well as with the intent and spirit of these Terms. You agree not to use the Platform for any purpose that is unlawful, harmful, fraudulent, or otherwise objectionable.</p>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">4.2.</span>
                        <div class="legal-clause-text">
                            <p><strong>Prohibited Items.</strong> The following types of vehicles and items are absolutely prohibited from being listed on the Platform, and any attempt to do so constitutes a severe breach of these Terms:</p>
                            <ul>
                                <li>Stolen motorcycles or vehicles with a reported theft record;</li>
                                <li>Vehicles with tampered, altered, defaced, or illegible engine or chassis numbers;</li>
                                <li>Vehicles lacking verifiable and authentic LTO documentation (OR/CR);</li>
                                <li>Vehicles that are currently the subject of a seizure order, court injunction, or government forfeiture;</li>
                                <li>Motorcycles intended or known to be used for illegal street racing (drag racing, "RTO") or other unlawful activities;</li>
                                <li>Parts, accessories, or modifications explicitly designed to remove or defeat road safety devices (e.g., removal of required lighting).</li>
                            </ul>
                            <p>The Company cooperates fully with law enforcement agencies and will proactively report any suspicious or illegal listings to the appropriate authorities, including the Philippine National Police (PNP) and the LTO.</p>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">4.3.</span>
                        <div class="legal-clause-text">
                            <p><strong>Prohibited Actions.</strong> While using the Platform, you agree not to:</p>
                            <ul>
                                <li>Harvest, collect, or systematically extract email addresses, mobile numbers, or other contact information of other Users by electronic or other means for purposes outside of a legitimate transaction;</li>
                                <li>Use automated bots, scripts, spiders, crawlers, or scrapers to access, copy, monitor, or index any portion of the Platform without the Company's express prior written consent;</li>
                                <li>Upload, transmit, or distribute viruses, trojans, ransomware, spyware, worms, time-bombs, or any other malicious software code designed to disrupt, damage, or gain unauthorized access to the Platform or its underlying systems;</li>
                                <li>Engage in phishing, spoofing, or other fraudulent conduct intended to extract payment, personal data, or vehicle documents from other Users;</li>
                                <li>Post duplicate Listings for the same vehicle in multiple categories or regions with the intent to flood search results;</li>
                                <li>Manipulate or artificially inflate the rating or review system;</li>
                                <li>Harass, intimidate, threaten, stalk, defame, or use abusive, discriminatory, or profane language towards other Users or the Company's support staff;</li>
                                <li>Impersonate any person or entity, or falsely claim an affiliation with any person or entity;</li>
                                <li>Circumvent, disable, or interfere with any security-related features of the Platform;</li>
                                <li>Use the Platform to advertise, recruit for, or promote multi-level marketing schemes, pyramid schemes, or other fraudulent investment opportunities.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">4.4.</span>
                        <div class="legal-clause-text">
                            <p><strong>Off-Platform Transactions.</strong> While the Company cannot prohibit Users from conducting transactions outside the Platform once initial contact has been made, the Company strongly discourages this practice and hereby expressly disclaims all liability for any dispute, fraud, loss, or damage arising from any transaction completed through communication channels other than those provided within the Platform. Users who are defrauded in off-platform transactions do so entirely at their own risk.</p>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">4.5.</span>
                        <div class="legal-clause-text">
                            <p><strong>Safety in Meetings.</strong> When meeting a Seller or Buyer in person to inspect or exchange a vehicle, we strongly advise all Users to meet in a public, well-lit location, such as a police station front lot or a busy commercial area, and to bring a trusted companion. The Company shall bear no responsibility for any personal harm, theft, or loss occurring during in-person meetings arranged through the Platform.</p>
                        </div>
                    </div>
                </section>

                <!-- SECTION 5 -->
                <section id="section-5">
                    <h2>5. Listing Standards and Vehicle Documentation Requirements</h2>
                    <div class="legal-clause">
                        <span class="legal-clause-num">5.1.</span>
                        <div class="legal-clause-text">
                            <p><strong>Accuracy Obligation.</strong> Sellers bear the sole and absolute responsibility to provide truthful, complete, accurate, and up-to-date information in every Listing. This obligation extends to all fields including but not limited to: the year, make, model, variant, color, odometer reading, engine displacement, transmission type, asking price, and the geographic location of the vehicle.</p>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">5.2.</span>
                        <div class="legal-clause-text">
                            <p><strong>Mandatory Disclosures.</strong> In addition to accurate general information, Sellers are required to disclose all of the following, where applicable:</p>
                            <ul>
                                <li>Any known mechanical defects, damage, or malfunctions, regardless of perceived severity;</li>
                                <li>Any prior involvement in a vehicular accident, regardless of whether the vehicle has been repaired;</li>
                                <li>Any pending, active, or recently settled bank loans, chattel mortgages, or other financial encumbrances attached to the vehicle;</li>
                                <li>Whether the vehicle's LTO registration is current and valid or lapsed, and the number of years of delinquency if applicable;</li>
                                <li>Whether the vehicle is being sold as a repossession from a financing institution;</li>
                                <li>Any significant modifications made to the engine, chassis, bodywork, or electrical system that deviate from the manufacturer's original specifications.</li>
                            </ul>
                            <p>Willful failure to disclose any of the above shall constitute fraudulent misrepresentation and may result in the immediate and permanent removal of the Listing, permanent banning from the Platform, and referral to appropriate legal authorities.</p>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">5.3.</span>
                        <div class="legal-clause-text">
                            <p><strong>Photographs.</strong> Listings must include a minimum number of clear, genuine, and unaltered photographs of the actual vehicle being sold, taken at the time of listing. The use of stock photographs, images downloaded from the internet, or photographs of a different unit is strictly prohibited. Photographs that have been digitally altered to conceal damage, rust, or defects constitute misrepresentation under Section 5.2.</p>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">5.4.</span>
                        <div class="legal-clause-text">
                            <p><strong>Listing Duration and Renewal.</strong> Each Listing shall remain active for a period determined by the type of account and plan selected by the Seller. The Seller is responsible for promptly removing or marking as "Sold" any Listing for a vehicle that has already been transferred to a Buyer. Leaving an active Listing for a vehicle that has been sold constitutes a misleading practice that harms the Platform's integrity, and repeated offenses may result in account suspension.</p>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">5.5.</span>
                        <div class="legal-clause-text">
                            <p><strong>Right to Remove Listings.</strong> The Company reserves the right, at its sole discretion and without prior notice, to remove, suspend, or modify any Listing that it determines, in good faith, to violate these Terms, applicable law, or the standards of the Platform. No refund of any Listing fees shall be owed for removals made pursuant to a violation of these Terms.</p>
                        </div>
                    </div>
                </section>

                <!-- SECTION 6 -->
                <section id="section-6">
                    <h2>6. Dealer and Business Accounts</h2>
                    <div class="legal-clause">
                        <span class="legal-clause-num">6.1.</span>
                        <div class="legal-clause-text">
                            <p><strong>Eligibility for Dealer Accounts.</strong> Motorcycle dealerships, second-hand vehicle shops, financing institutions, and other businesses seeking to operate a Dealer Account on the Platform must submit a valid and complete application, including proof of business registration (DTI Certificate or SEC Registration), BIR Certificate of Registration, and any relevant LTO accreditation or dealer authorization documents. The Company reserves the right to approve or reject any Dealer Account application at its sole and absolute discretion.</p>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">6.2.</span>
                        <div class="legal-clause-text">
                            <p><strong>Higher Standard of Conduct.</strong> Dealer Account holders are held to a higher standard of conduct and accuracy than private Sellers, given their commercial and professional capacity. Dealers must ensure that all Listings comply with applicable consumer protection laws, including Republic Act No. 7394 (Consumer Act of the Philippines), and that all representations made in Listings are not false, deceptive, or misleading under any consumer protection standard.</p>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">6.3.</span>
                        <div class="legal-clause-text">
                            <p><strong>Authorized Users.</strong> A business registering a Dealer Account represents and warrants that the individual completing the registration is fully authorized to bind the business to these Terms. The business is responsible for all activity conducted by any of its employees, agents, or representatives who access the Dealer Account.</p>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">6.4.</span>
                        <div class="legal-clause-text">
                            <p><strong>Dealer-Specific Fees.</strong> Dealer Account holders are subject to separate and distinct fee schedules, subscription terms, and platform policies as outlined in the current Dealer Pricing Schedule, which is incorporated herein by reference and may be updated from time to time.</p>
                        </div>
                    </div>
                </section>

                <!-- SECTION 7 -->
                <section id="section-7">
                    <h2>7. Fees, Payments, and Premium Services</h2>
                    <div class="legal-clause">
                        <span class="legal-clause-num">7.1.</span>
                        <div class="legal-clause-text">
                            <p><strong>Free and Premium Tiers.</strong> The Platform offers both free-tier access and paid premium services. Free access allows individual Sellers to post a limited number of Listings per calendar month as specified in the current Pricing Schedule. Premium features, including but not limited to increased Listing visibility, featured placement, priority search ranking, and enhanced analytics, are available through paid subscription plans.</p>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">7.2.</span>
                        <div class="legal-clause-text">
                            <p><strong>Payment Obligations.</strong> All fees for premium services are payable in Philippine Peso (PHP) and are due in advance. The Company uses third-party payment processors to handle all financial transactions. By providing payment information, you represent and warrant that you are authorized to use the designated payment method and authorize the Company (through its payment processor) to charge the applicable fees.</p>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">7.3.</span>
                        <div class="legal-clause-text">
                            <p><strong>Non-Refundable Fees.</strong> Except as otherwise required by applicable law or as expressly stated in a specific promotional offer, all fees paid for premium Listings, featured placements, subscription plans, or any other paid service are strictly non-refundable, including in cases where a Listing is removed due to a violation of these Terms. The Company will not issue refunds or credits for unused periods of a subscription.</p>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">7.4.</span>
                        <div class="legal-clause-text">
                            <p><strong>Pricing Changes.</strong> The Company reserves the right to modify its fee structures, subscription rates, and premium service pricing at any time. Any changes to pricing will be communicated to affected Users at least thirty (30) days in advance via email or a prominent notice on the Platform. Your continued use of paid services after the effective date of a pricing change constitutes your acceptance of the new rates.</p>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">7.5.</span>
                        <div class="legal-clause-text">
                            <p><strong>Taxes.</strong> All fees are exclusive of applicable taxes. You are solely responsible for determining and remitting any applicable taxes, duties, or government charges arising from transactions you enter into through the Platform, including but not limited to Value Added Tax (VAT) as required by the National Internal Revenue Code of the Philippines.</p>
                        </div>
                    </div>
                </section>

                <!-- SECTION 8 -->
                <section id="section-8">
                    <h2>8. Buyer Protections and Due Diligence</h2>
                    <div class="legal-clause">
                        <span class="legal-clause-num">8.1.</span>
                        <div class="legal-clause-text">
                            <p><strong>Buyer's Responsibility.</strong> While the Company endeavors to maintain a trustworthy marketplace, ultimate responsibility for verifying the legitimacy of a Seller, the authenticity of a vehicle's documents, and the accuracy of a Listing rests entirely with the Buyer. The Company strongly urges all Buyers not to release any payment, deposit, or earnest money until they have conducted a satisfactory in-person inspection and have personally verified the vehicle's documentation.</p>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">8.2.</span>
                        <div class="legal-clause-text">
                            <p><strong>Warning Against Advance Payment Scams.</strong> Buyers should be highly suspicious of any Seller who: (a) refuses to meet in person or allow a physical inspection; (b) requests payment via informal channels (GCash, Maya, bank transfer) before any in-person verification; (c) offers a price dramatically below fair market value as a time-limited offer; or (d) claims to be overseas or otherwise unable to present the vehicle. The Company will never instruct you to send payment to any party other than the Seller you have personally verified.</p>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">8.3.</span>
                        <div class="legal-clause-text">
                            <p><strong>LTO Encumbrance Check.</strong> Prior to completing any purchase, Buyers are strongly advised to verify with the LTO whether the vehicle has an existing encumbrance (e.g., chattel mortgage filed by a financing institution). A vehicle transferred while an encumbrance remains active may be subject to repossession by the creditor regardless of a Buyer's good-faith purchase.</p>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">8.4.</span>
                        <div class="legal-clause-text">
                            <p><strong>Deed of Sale.</strong> All Buyers and Sellers are strongly advised to execute a notarized Deed of Absolute Sale upon the completion of a vehicle transfer transaction. The Company may provide optional templates for reference purposes, which are not to be construed as legal advice. Users are encouraged to consult a licensed attorney for the preparation of legally binding transfer documents.</p>
                        </div>
                    </div>
                </section>

                <!-- SECTION 9 -->
                <section id="section-9">
                    <h2>9. Intellectual Property Rights</h2>
                    <div class="legal-clause">
                        <span class="legal-clause-num">9.1.</span>
                        <div class="legal-clause-text">
                            <p><strong>Platform Ownership.</strong> All content and materials included on or comprising the Platform, including but not limited to text, graphics, logos, button icons, images, audio clips, digital downloads, data compilations, software, code, algorithms, and the overall look and feel and design of the Platform, are the exclusive property of the Company or its respective content suppliers and licensors, and are protected by the Intellectual Property Code of the Philippines (Republic Act No. 8293) and applicable international copyright, trademark, and database laws. All rights not expressly granted herein are reserved.</p>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">9.2.</span>
                        <div class="legal-clause-text">
                            <p><strong>Restricted Use.</strong> You may not reproduce, duplicate, copy, sell, resell, republish, transmit, or otherwise exploit for any commercial purpose any portion of the Platform, the content thereon, or any access to the Platform without the prior express written permission of the Company. Any unauthorized use of the Platform or its content constitutes a breach of these Terms and may violate copyright, trademark, and other applicable laws.</p>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">9.3.</span>
                        <div class="legal-clause-text">
                            <p><strong>User Content License.</strong> By posting a Listing or uploading any User Content to the Platform, you represent and warrant that you own or have the necessary rights, licenses, and permissions to post such content. You hereby grant the Company a non-exclusive, worldwide, perpetual, irrevocable, royalty-free, sublicensable, and transferable right and license to use, reproduce, modify, adapt, publish, translate, distribute, create derivative works from, publicly display, and publicly perform your User Content in connection with operating, promoting, and improving the Platform, in any media format and through any media channels now known or hereafter devised. This license survives the termination of your account or the removal of a Listing.</p>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">9.4.</span>
                        <div class="legal-clause-text">
                            <p><strong>Copyright Infringement.</strong> The Company respects the intellectual property rights of others and expects Users to do the same. If you believe that any content on the Platform infringes your copyright, please submit a written notice to the Company's designated contact address, including: (a) a description of the copyrighted work; (b) identification of the infringing material and its location on the Platform; (c) your contact information; and (d) a declaration of good faith belief and authority. The Company will investigate and take appropriate action in accordance with applicable law.</p>
                        </div>
                    </div>
                </section>

                <!-- SECTION 10 -->
                <section id="section-10">
                    <h2>10. Privacy and Data Protection</h2>
                    <div class="legal-clause">
                        <span class="legal-clause-num">10.1.</span>
                        <div class="legal-clause-text">
                            <p><strong>Compliance with Data Privacy Act.</strong> The Company is committed to protecting your personal data and operates in compliance with Republic Act No. 10173, also known as the Data Privacy Act of 2012, and its Implementing Rules and Regulations (IRR). All personal information collected from Users is processed and stored in accordance with the principles of transparency, legitimate purpose, and proportionality.</p>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">10.2.</span>
                        <div class="legal-clause-text">
                            <p><strong>Data Collected.</strong> The Company may collect various categories of personal data, including but not limited to: full name, email address, mobile phone number, government-issued identification details, financial account information (for payment processing), IP addresses, device identifiers, browser type, geographic location data, and behavioral data derived from your use of the Platform.</p>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">10.3.</span>
                        <div class="legal-clause-text">
                            <p><strong>Consent.</strong> By creating an account and using the Platform, you expressly and freely consent to the collection, use, storage, and processing of your personal data as described in the Company's Privacy Policy, which is incorporated herein by reference and forms an integral part of these Terms. You may withdraw consent at any time by closing your account, subject to the Company's retention obligations under applicable law.</p>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">10.4.</span>
                        <div class="legal-clause-text">
                            <p><strong>Data Subject Rights.</strong> In accordance with the Data Privacy Act of 2012, you retain the following rights with respect to your personal data: the right to be informed, the right to access, the right to object, the right to erasure and blocking, the right to rectification, and the right to data portability. To exercise these rights, please contact the Company's Data Protection Officer using the contact information provided in the Privacy Policy.</p>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">10.5.</span>
                        <div class="legal-clause-text">
                            <p><strong>Communications.</strong> By creating an account, you consent to receive transactional emails, system notifications, security alerts, and price alert notifications related to your use of the Platform. You may opt out of non-essential marketing and promotional communications at any time via the unsubscribe mechanism in any such email or through your account notification settings. You cannot opt out of transactional or security-related communications without deactivating your account.</p>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">10.6.</span>
                        <div class="legal-clause-text">
                            <p><strong>Data Sharing.</strong> The Company does not sell your personal data to third parties. We may, however, share necessary personal information with trusted third-party service providers (e.g., payment processors, identity verification services, cloud infrastructure providers) solely for the purpose of operating and improving the Platform, subject to strict confidentiality obligations. We may also disclose personal data when required to do so by law, judicial order, or lawful request by government authorities.</p>
                        </div>
                    </div>
                </section>

                <!-- SECTION 11 -->
                <section id="section-11">
                    <h2>11. Trust, Safety, and Reporting</h2>
                    <div class="legal-clause">
                        <span class="legal-clause-num">11.1.</span>
                        <div class="legal-clause-text">
                            <p><strong>Reporting Mechanism.</strong> The Company provides a built-in reporting feature allowing Users to flag Listings or User profiles that they believe violate these Terms. Users are encouraged to make use of this feature in good faith. False or malicious reports submitted with the intent to harm another User's Listing or reputation may result in action being taken against the reporting account.</p>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">11.2.</span>
                        <div class="legal-clause-text">
                            <p><strong>Cooperation with Authorities.</strong> The Company fully cooperates with the Philippine National Police (PNP), the National Bureau of Investigation (NBI), the LTO, the Bangko Sentral ng Pilipinas (BSP) where applicable, and other government agencies in the investigation of fraudulent activities, stolen vehicles, and any criminal activity facilitated through the Platform. Upon receipt of a lawful request, the Company will disclose User information, Listing data, and transaction histories as required.</p>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">11.3.</span>
                        <div class="legal-clause-text">
                            <p><strong>Reviews and Ratings.</strong> The Platform may incorporate a User review and rating system. You agree to submit reviews and ratings that are truthful, based on genuine first-hand experiences, and comply with these Terms. You agree not to post reviews that are defamatory, harassing, commercially motivated (e.g., submitted in exchange for payment), or that contain personal information about other Users. The Company reserves the right to remove any review that it deems, in its sole discretion, to be in violation of these principles.</p>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">11.4.</span>
                        <div class="legal-clause-text">
                            <p><strong>Verified Badge Program.</strong> The Verified Badge, when available, is granted based on the Company's verification procedures in effect at the time of application. Users with a Verified Badge are not endorsed, warranted, or guaranteed by the Company. The Verified Badge is revocable at any time if a User is found to have provided false documentation or has violated these Terms.</p>
                        </div>
                    </div>
                </section>

                <!-- SECTION 12 -->
                <section id="section-12">
                    <h2>12. Third-Party Links and Services</h2>
                    <div class="legal-clause">
                        <span class="legal-clause-num">12.1.</span>
                        <div class="legal-clause-text">
                            <p><strong>External Links.</strong> The Platform may contain links or integrations to third-party websites, services, applications, or resources (including social media platforms, payment gateways, and messaging services) that are not owned, operated, or controlled by the Company. These links are provided solely for the User's convenience and do not constitute an endorsement, sponsorship, or recommendation of the linked site or service by the Company.</p>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">12.2.</span>
                        <div class="legal-clause-text">
                            <p><strong>No Liability for Third Parties.</strong> The Company has no control over the content, privacy policies, or practices of any third-party websites or services. You access any such third-party resources entirely at your own risk, and you acknowledge that the Company shall not be responsible or liable, directly or indirectly, for any damage or loss caused by or in connection with your use of or reliance on any third-party content, services, or products available on or through any linked site.</p>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">12.3.</span>
                        <div class="legal-clause-text">
                            <p><strong>Third-Party Terms.</strong> Your use of any third-party services accessible through or integrated with the Platform shall be governed by the terms and privacy policies of the respective third-party providers. You are strongly encouraged to review those terms before using such services.</p>
                        </div>
                    </div>
                </section>

                <!-- SECTION 13 -->
                <section id="section-13">
                    <h2>13. Limitation of Liability and Indemnification</h2>
                    <div class="legal-clause">
                        <span class="legal-clause-num">13.1.</span>
                        <div class="legal-clause-text">
                            <p><strong>Limitation of Damages.</strong> To the maximum extent permitted by applicable law, in no event shall the Company, its affiliates, directors, officers, employees, agents, service providers, contractors, licensors, or suppliers be liable to you or any third party for any indirect, punitive, incidental, special, consequential, or exemplary damages whatsoever, including without limitation damages for: loss of profits, revenue, data, goodwill, business opportunity, use, or other intangible losses; cost of replacement goods or services; personal injury or property damage; unauthorized access to or alteration of your data; or any other matter relating to the Platform, regardless of whether the Company has been informed of the possibility of such damages and regardless of the theory of liability asserted.</p>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">13.2.</span>
                        <div class="legal-clause-text">
                            <p><strong>Aggregate Liability Cap.</strong> To the maximum extent permitted by law, the Company's total aggregate liability to you for any and all claims arising out of or relating to these Terms or your use of the Platform shall not exceed the total fees actually paid by you to the Company in the twelve (12) months immediately preceding the event giving rise to the claim, or Five Hundred Philippine Pesos (PHP 500.00), whichever is greater.</p>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">13.3.</span>
                        <div class="legal-clause-text">
                            <p><strong>Indemnification.</strong> You agree, to the fullest extent permitted by law, to defend, indemnify, and hold harmless the Company, its affiliates, licensors, and service providers, and their respective officers, directors, employees, contractors, agents, licensors, suppliers, successors, and assigns from and against any and all claims, liabilities, damages, judgments, awards, losses, costs, expenses, or fees (including reasonable attorneys' fees and court costs) arising out of or relating to: (a) your use of, or inability to use, the Platform; (b) any User Content you post or transmit; (c) your violation of these Terms; (d) your violation of any applicable law or regulation; or (e) your violation of any third party's rights, including intellectual property rights or privacy rights.</p>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">13.4.</span>
                        <div class="legal-clause-text">
                            <p><strong>Essential Basis of the Bargain.</strong> You acknowledge and agree that the Company has set its fees and entered into these Terms in reliance upon the limitations of liability and the disclaimers of warranties and damages set forth herein, and that the same form an essential basis of the bargain between you and the Company. The limitations of liability shall apply even if any remedy herein fails of its essential purpose.</p>
                        </div>
                    </div>
                </section>

                <!-- SECTION 14 -->
                <section id="section-14">
                    <h2>14. Modifications to the Platform and Terms</h2>
                    <div class="legal-clause">
                        <span class="legal-clause-num">14.1.</span>
                        <div class="legal-clause-text">
                            <p><strong>Modifications to the Platform.</strong> The Company reserves the right at any time and from time to time, with or without notice, to modify, suspend, or discontinue (temporarily or permanently) the Platform or any portion thereof, including any features, functionality, pricing, or content. You agree that the Company shall not be liable to you or to any third party for any modification, suspension, or discontinuance of the Platform.</p>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">14.2.</span>
                        <div class="legal-clause-text">
                            <p><strong>Modifications to These Terms.</strong> The Company reserves the right to amend, revise, or update these Terms at any time. When material changes are made, the Company will: (a) update the "Last Updated" date at the top of this page; (b) send an email notification to registered Users; and/or (c) display a prominent notice on the Platform prior to the changes taking effect. Your continued access to or use of the Platform after the effective date of any modifications constitutes your binding acceptance of the revised Terms. If you do not agree to the revised Terms, you must cease using the Platform and may close your account.</p>
                        </div>
                    </div>
                </section>

                <!-- SECTION 15 -->
                <section id="section-15">
                    <h2>15. Termination</h2>
                    <div class="legal-clause">
                        <span class="legal-clause-num">15.1.</span>
                        <div class="legal-clause-text">
                            <p><strong>Termination by the Company.</strong> The Company may, in its sole discretion, immediately terminate or suspend your access to the Platform and your account, with or without notice and without liability to you, for any reason including but not limited to breach of these Terms, fraudulent activity, extended inactivity, or if continued operation of your account poses a risk to the Platform or its Users.</p>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">15.2.</span>
                        <div class="legal-clause-text">
                            <p><strong>Termination by You.</strong> You may close your account at any time by accessing your account settings and following the account closure process, or by submitting a written request to the Company's support team. Closing your account does not absolve you of any outstanding obligations or liabilities incurred prior to the date of closure.</p>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">15.3.</span>
                        <div class="legal-clause-text">
                            <p><strong>Effect of Termination.</strong> Upon termination of your account: (a) your right to access and use the Platform shall immediately cease; (b) all active Listings associated with your account may be removed; (c) the Company may retain your personal data for such period as required by law or legitimate business purpose; and (d) provisions of these Terms that by their nature should survive termination (including but not limited to Sections 3, 9, 10, 13, 17, and 18) shall remain in full force and effect.</p>
                        </div>
                    </div>
                </section>

                <!-- SECTION 16 -->
                <section id="section-16">
                    <h2>16. Force Majeure</h2>
                    <div class="legal-clause">
                        <span class="legal-clause-num">16.1.</span>
                        <div class="legal-clause-text">
                            <p>The Company shall not be liable or responsible to you, nor be deemed to have defaulted under or breached these Terms, for any failure or delay in the performance of its obligations under these Terms when and to the extent such failure or delay is caused by or results from acts beyond the Company's reasonable control, including without limitation: (a) acts of God, including floods, earthquakes, typhoons, or other natural disasters; (b) epidemic or pandemic; (c) war, invasion, armed conflict, terrorism, or riots; (d) government actions, embargoes, or regulatory changes; (e) power outages, internet failures, cyberattacks, or infrastructure failures; or (f) labor disputes or strikes involving third-party service providers. In any such event, the Company will use reasonable efforts to notify affected Users and resume normal operations as soon as practicable.</p>
                        </div>
                    </div>
                </section>

                <!-- SECTION 17 -->
                <section id="section-17">
                    <h2>17. Governing Law and Jurisdiction</h2>
                    <div class="legal-clause">
                        <span class="legal-clause-num">17.1.</span>
                        <div class="legal-clause-text">
                            <p><strong>Applicable Law.</strong> These Terms, and any dispute or claim (including non-contractual disputes or claims) arising out of or in connection with them or their subject matter or formation, shall be governed by and construed in strict accordance with the laws of the Republic of the Philippines, without regard to its conflict of laws provisions and without giving effect to any choice or agreement of law.</p>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">17.2.</span>
                        <div class="legal-clause-text">
                            <p><strong>Exclusive Venue.</strong> You and the Company agree that any legal action, suit, or proceeding arising out of or relating to these Terms, the Privacy Policy, or the Platform shall be instituted exclusively in the proper courts of Bulacan, Philippines, which courts shall have exclusive jurisdiction over all such matters. You irrevocably and unconditionally submit to the personal jurisdiction of such courts and waive any objection to the laying of venue in such courts, including any claim that such court is an inconvenient forum.</p>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">17.3.</span>
                        <div class="legal-clause-text">
                            <p><strong>Severability.</strong> If any provision of these Terms is held by a court of competent jurisdiction to be invalid, illegal, unenforceable, or contrary to law for any reason, such invalidity, illegality, or unenforceability shall not affect any other provisions hereof, and these Terms shall be construed as if such invalid, illegal, or unenforceable provision had never been contained herein, provided that the fundamental intent and economic effect of these Terms is not thereby substantially altered.</p>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">17.4.</span>
                        <div class="legal-clause-text">
                            <p><strong>No Waiver.</strong> The failure of the Company to enforce any right or provision of these Terms shall not constitute a waiver of the Company's right to enforce such provision at any subsequent time, nor shall a waiver of any particular breach constitute a waiver of any other breach or of the same provision on another occasion.</p>
                        </div>
                    </div>
                </section>

                <!-- SECTION 18 -->
                <section id="section-18">
                    <h2>18. Miscellaneous Provisions</h2>
                    <div class="legal-clause">
                        <span class="legal-clause-num">18.1.</span>
                        <div class="legal-clause-text">
                            <p><strong>Entire Agreement.</strong> These Terms, together with the Privacy Policy and any other legal notices, policies, or guidelines published by the Company on the Platform, constitute the entire and exclusive agreement between you and the Company with respect to your use of the Platform, and supersede all prior and contemporaneous understandings, agreements, representations, and warranties, both written and oral, with respect to the same subject matter.</p>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">18.2.</span>
                        <div class="legal-clause-text">
                            <p><strong>Assignment.</strong> You may not assign or transfer these Terms, or any of your rights or obligations hereunder, without the prior written consent of the Company. The Company may freely assign these Terms in connection with a merger, acquisition, corporate reorganization, or sale of all or substantially all of its assets, without your consent or prior notice. Any purported assignment in violation of this section shall be null and void.</p>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">18.3.</span>
                        <div class="legal-clause-text">
                            <p><strong>Notices.</strong> All legal notices or demands directed to the Company must be made in writing and delivered to our official support contact at the address provided on the Platform's "Contact Us" page. We may provide notices to you via the email address associated with your account or through a general notice posted on the Platform.</p>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">18.4.</span>
                        <div class="legal-clause-text">
                            <p><strong>Language.</strong> These Terms are drafted in the English language. In the event of any inconsistency between the English version and any translation made available by the Company, the English version shall prevail and control in all respects.</p>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">18.5.</span>
                        <div class="legal-clause-text">
                            <p><strong>Headings.</strong> Section headings contained in these Terms are for convenience and reference purposes only and shall not affect the interpretation or construction of any provision hereof.</p>
                        </div>
                    </div>
                    <div class="legal-clause">
                        <span class="legal-clause-num">18.6.</span>
                        <div class="legal-clause-text">
                            <p><strong>Contact Information.</strong> If you have any questions, concerns, or complaints regarding these Terms or the Platform's operations, you may contact the Company through the official support channels listed on the Platform's website. The Company will make reasonable efforts to respond to all inquiries within a reasonable time frame.</p>
                        </div>
                    </div>

                    <div class="notice-box">
                        <strong>BY CONTINUING TO USE THE MOTOWOW PLATFORM, YOU ACKNOWLEDGE THAT YOU HAVE READ THESE TERMS AND CONDITIONS IN THEIR ENTIRETY, THAT YOU UNDERSTAND THEM, AND THAT YOU AGREE TO BE LEGALLY BOUND BY THEM.</strong>
                    </div>
                </section>

            </div>
        </div>
    </main>

    <div>
        <?php include __DIR__ . '/../../includes/footer.php'; ?>
    </div>
</body>
</html>