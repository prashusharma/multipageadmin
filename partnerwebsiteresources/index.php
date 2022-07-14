<!doctype html>
<html lang="en">

<head>
    <?php
    include '../partials/dbconnect.php';
    $actual_link = "https://$_SERVER[HTTP_HOST]";
    $partnerid = $_GET['partner_id'];
    $services = $_GET['service'];

    $sql = "SELECT * FROM `partner_details` where partner_id = '$partnerid'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    $country = $row['country_selected'];
    $country_name = $row['country_name'];
    $state = $row['state_name'];
    $city = $row['city_name'];
    $phone = empty($row['partner_phone']) ? "+1 646 679-7250" : $row['partner_phone'];
    $email = empty($row['partner_email']) ? "hi@organizein.com" : $row['partner_email'];
    $linkedin = $row['partner_linkedin'];
    $current_url = $actual_link.'/'. str_replace(" ", "-", strtolower(trim($country)))."/".str_replace(" ", "-", strtolower(trim($city)))."/".str_replace(" ", "-", strtolower(trim($services))).".php";

    /*<?php echo $country?>
<?php echo $state?>
<?php echo $city?>*/

    ?>
    <!-- https://countryflagsapi.com/png/pakistan -->

    <!--------------- Required meta tags ------------------->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php if ($row['meta_title'] == "") : ?>
        <meta name="title" content="<?php echo $city ?> SEO Services | <?php echo $city ?> Web Design | <?php echo $city ?> Digital Marketing">
    <?php else : ?>
        <meta name="title" content="<?php echo $row['meta_title'] ?>">
    <?php endif ?>

    <?php if ($row['meta_description'] == "") : ?>
        <meta name="description" content="<?php echo $city ?> SEO Company is a leading SEO & Web Design Agency that provides unmatched <?php echo $city ?> SEO services. We deliver more leads and traffic to your online business in <?php echo $city ?> and surrounding burrows, call <?php echo $city ?> SEO Company today.">
    <?php else : ?>
        <meta name="description" content="<?php echo $row['meta_description'] ?>">
    <?php endif ?>
    
    <?php if ($row['meta_keyword'] == "") : ?>
        <meta name="keywords" content="<?php echo $city ?> SEO Company ,<?php echo $city ?>  Social Media Company,<?php echo $city ?> PPC Company ,<?php echo $city ?>  Digital Marketing Company ,<?php echo $city ?> Web Design Company ,<?php echo $city ?> Graphic design agency">
    <?php else : ?>
        <meta name="keywords" content="<?php echo $row['meta_keyword'] ?>">
    <?php endif ?>



    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.css" />

    <!----------------------- custom css  ----------------------->
    <link rel="stylesheet" href="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/css/style.css">
    <!---------------------- fontawesome  ------------------------>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="shortcut icon" href="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/logo favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/megaMenu.css">
    <!-- Header code -->
    <?php
    $header_code = mysqli_query($conn, "SELECT * FROM `extra_code`");
    $header_code = mysqli_fetch_assoc($header_code);
    // print_r($header_code); exit();
    if ($row["special_header_script"] != "") : ?>
        <?= $row["special_header_script"] ?>
   <?php elseif ($header_code["header_code"] != "") : ?>
        <?= $header_code["header_code"] ?>
    <?php endif ?>
    <!-- Header code -->

    <style>
        .source {
            display: none !important;
            opacity: 0;
        }

        .loader {
            width: 100%;
            height: 100vh;
            background: rgba(0, 0, 0, 0.5);
            position: fixed;
        }

        .center-box {
            margin: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 120px;
            height: 120px;
        }

        .spinner {
            border: 16px solid #f3f3f3;
            /* Light grey */
            border-top: 16px solid #3498db;
            /* Blue */
            border-radius: 50%;
            width: 120px;
            height: 120px;
            animation: spin 2s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
    <?php if ($row['meta_title'] == "") : ?>
        <title><?php echo $city ?> <?=$services?> </title>
    <?php else : ?>
        <title><?php echo $row['meta_title'] ?></title>
    <?php endif ?>
</head>

<body>
    <div class="loader d-none">
        <div class="center-box">
            <div class="spinner"></div>
        </div>
    </div>
    <!--------------------- header section start --------------------------->
    <header>
        <div class="____shadow">
            <div class="Warper___header px-4">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 col-12 top__header__Wraper mx-auto">
                            <div class="left___site____top_____header">
                                <span>Get Custom Proposal</span>

                                <ul>
                                    <li class="social_media_icons"><a href="https://www.facebook.com/organizeindm/ 
                                        "><i class="fab fa-facebook"></i></a><span>Facebook</span></li>
                                    <li class="social_media_icons"><a href="https://twitter.com/Organizein/ "><i class="fab fa-twitter"></i></a><span>Twitter</span></li>
                                    <li class="social_media_icons"><a href="https://www.linkedin.com/company/3273657/"><i class="fab fa-linkedin"></i></a><span>Linkedin</span></li>
                                    <li class="social_media_icons"><a href="https://www.youtube.com/channel/UCAuvWg57vxGiRcyRV9p3Avw/videos
                                        "><i class="fab fa-youtube"></i></a><span>Youtube</span></li>
                                    <li class="social_media_icons"><a href="https://www.instagram.com/organizein_/"><i class="fab fa-instagram"></i></a><span>Instagram</span></li>
                                </ul>
                            </div>
                            <?php if ($row["special_top_message"] != "") : ?>
                                <div class="left___site____top_____header"><?= $row["special_top_message"] ?></div>
                            <?php elseif ($header_code["top_header_message"] != "") : ?>
                                <div class="left___site____top_____header"><?= $header_code["top_header_message"] ?></div>
                            <?php endif ?>
                            <div class="right___site____top___header">
                                <div class="number___div" style="margin-right: 4px;">
                                    <span><i class="fas fa-mobile-alt"></i> <?php echo $phone ?></span>
                                </div>
                                <div class="number___div">
                                    <span><i class="fas fa-mobile-alt"></i> <?php echo $email ?></span>
                                </div>
                                <div class="login___img">
                                    <img style="margin-top: 2px;border-radius: 100%;width: 25px;height: 25px;" src="https://countryflagsapi.com/png/<?php echo $country_name ?>" alt="flag" class="img-fluid flag" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <span class="login_btn_company">Login
                                        <div class="openPoper">
                                            <div class="head">
                                                <div class="logo"></div>
                                                <a href="#" class="login">Login</a>
                                            </div>
                                            <div class="center">
                                                <div class="otherLogins">Other Logins</div>
                                                <p>Staff login , client KPI...</p>
                                                <div class="bottom">
                                                    <a href="https://crm.organizein.com/admin">Staff Login</a>
                                                    <a href="https://crm.organizein.com">Client Login</a>
                                                    <a href="https://crm.organizein.com/myaccount/login">Kpi
                                                        Dashboard</a>
                                                </div>
                                            </div>
                                        </div>

                                    </span>
                                    <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/icon-login.png" alt="persone" class="img-fluid persone__logo">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!------------------------- middel header section start  ------------------------------>

        <div class="Warper___header nav___sit px-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-12 middle___header__Wraper mx-auto">
                        <div class="logo__img logo___p">
                            <a href="#"><img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/logo.png" alt="logo__img" class="img-fluid" /></a>
                        </div>
                        <div class="list___nav__here">
                            <ul>
                                <li><a href="#" class="mega_trigger_1">SEO <i class="fas fa-chevron-down"></i></a>
                                    <div class="mega_menu_container mega_trigger_1_container">
                                        <div class="mega_menu_wrapper mega_trigger_1">
                                            <div class="mega_menu_left">
                                                <div>
                                                    <div class="mega_menu_left_heading">BOOST ONLINE PRESENCE</div>
                                                    <h4>SEO Services :Turn
                                                        Traffic Increases Into
                                                        Revenue</h4>
                                                    <p class="small-txt">Start ranking higher, earning<br>
                                                        more qualified traffic, and<br>
                                                        increasing your bottom line with<br>
                                                        fully-managed SEO services<br>
                                                        from organizein</p>
                                                </div>
                                                <div class="serviceBtn">
                                                    <a href="https://www.organizein.com/seo/" class="allService">
                                                        <img src="https://www.organizein.com/wp-content/uploads/2021/01/allservice.png" alt="" srcset="" width="40px">
                                                        See All Services
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="mega_menu_right ">
                                                <div class="mega_menu_coloum">
                                                    <div class="column_heading">DRIVE MORE LEADS</div>
                                                    <div class="column_items">
                                                        <a class="item_data" href="https://www.organizein.com/seo-services/">SEO
                                                            Services</a>
                                                        <a class="item_data" href="https://www.organizein.com/e-commerce-seo/">eCommerce
                                                            SEO</a>
                                                        <a class="item_data" href="https://www.organizein.com/local-seo/">Local
                                                            SEO</a>
                                                        <a class="item_data" href="https://www.organizein.com/link-building-services-seo/">Link
                                                            Building Services</a>
                                                        <a class="item_data" href="https://www.organizein.com/link-penalty-removal/">Link
                                                            Penalty Removal</a>
                                                        <a class="item_data" href="https://www.organizein.com/seo-audits/">SEO
                                                            Audits</a>
                                                        <a class="item_data" href="https://www.organizein.com/negative-seo-monitoring/">Negative
                                                            SEO Monitoring</a>
                                                        <a class="item_data" href="https://www.organizein.com/seo-competitor-intelligence/">SEO
                                                            Competitor Intelligence</a>
                                                        <a class="item_data" href="https://www.organizein.com/video-seo/">Video
                                                            SEO</a>
                                                        <a class="item_data" href="https://www.organizein.com/pnb-guest-blog-outreach/">PNB
                                                            -Guest Blog</a>
                                                        <a class="item_data" href="https://www.organizein.com/gov-edu-link-building/">Gov
                                                            &amp; Edu link Building</a>
                                                        <a class="item_data" href="https://www.organizein.com/website-seo-copywriting/">Website
                                                            SEO Copywriting</a>
                                                        <a class="item_data" href="https://www.organizein.com/voice-search-content-optimization/">Voice
                                                            Search Content Optimization</a>
                                                        <a class="item_data" href="https://www.organizein.com/seo-friendly-site-architecture/">SEO
                                                            Friendly Site Architecture</a>
                                                        <a class="item_data" href="https://www.organizein.com/seo-strategy-advice/">SEO
                                                            Strategy Advice</a>
                                                        <a class="item_data" href="https://www.organizein.com/top-keywords-advice/">Top
                                                            Keywords Advice</a>
                                                        <a class="item_data" href="https://www.organizein.com/digital-pr/">Digital
                                                            PR</a>
                                                    </div>
                                                </div>
                                                <div class="mega_menu_coloum">
                                                    <div class="column_heading">Increase Your Reach</div>
                                                    <div class="column_items">
                                                        <a class="item_data" href="https://www.organizein.com/amazon-seo-product-optimization/">Amazon
                                                            SEO &amp; Product Optimization</a><a class="item_data" href="https://www.organizein.com/mobile-apps-seo/">Mobile
                                                            Apps SEO</a><a class="item_data" href="https://www.organizein.com/optimize-social-media/">Optimize
                                                            Social Media</a><a class="item_data" href="https://www.organizein.com/hubsot-seo/">HubSpot
                                                            SEO</a><a class="item_data" href="https://www.organizein.com/wix-seo/">Wix SEO</a><a class="item_data" href="https://www.organizein.com/shopify-seo/">Shopify
                                                            SEO</a><a class="item_data" href="https://www.organizein.com/wordpress-seo/">Wordpress
                                                            SEO</a><a class="item_data" href="https://www.organizein.com/volusion-seo/">Volusion
                                                            SEO</a><a class="item_data" href="https://www.organizein.com/magento-seo/">Magento
                                                            SEO</a><a class="item_data" href="https://www.organizein.com/squarespace-seo/">Squarespace
                                                            SEO</a><a class="item_data" href="https://www.organizein.com/woocommerce-seo/">WooCommerce
                                                            SEO</a><a class="item_data" href="https://www.organizein.com/bigcommerce-seo/">BigCommerce
                                                            SEO</a><a class="item_data" href="https://www.organizein.com/weebly-seo/">Weebly SEO</a>
                                                    </div>
                                                </div>
                                                <div class="mega_menu_coloum">
                                                    <div class="column_heading">Accelerate Your Revenue</div>
                                                    <div class="column_items">
                                                        <a class="item_data" href="https://www.organizein.com/enterprise-seo/">Enterprise
                                                            SEO</a><a class="item_data" href="https://www.organizein.com/franchse-seo/">Franchise
                                                            SEO</a><a class="item_data" href="https://www.organizein.com/hire-dedicated-seo-team/">Hire
                                                            Dedicated SEO Team</a><a class="item_data" href="https://www.organizein.com/white-label-seo/">White-label
                                                            SEO</a><a class="item_data" href="https://www.organizein.com/seo-project-management/">SEO
                                                            Project Management</a><a class="item_data" href="https://www.organizein.com/managed-seo-service/">Managed
                                                            SEO Service</a><a class="item_data" href="https://www.organizein.com/web-consule-management/">Web
                                                            console Management</a><a class="item_data" href="https://www.organizein.com/custom-seo-dashboard-reporting/">Custom
                                                            SEO Dashboard &amp; Reporting</a><a class="item_data" href="https://www.organizein.com/smb-solution/">SMB
                                                            Solution</a><a class="item_data" href="https://www.organizein.com/multigual-seo/">Multilingual
                                                            SEO</a><a class="item_data" href="https://www.organizein.com/seo-web-speed-optimization/">SEO
                                                            Web Speed Optimization</a><a class="item_data" href="https://www.organizein.com/seo-safe-cdn-integration/">SEO
                                                            Safe CDN Integration</a><a class="item_data" href="https://www.organizein.com/improve-score-in-gtmetrix/">Improve
                                                            Score in GTMetrix</a><a class="item_data" href="https://www.organizein.com/improve-core-web-vitals/">Improve
                                                            Core Web Vitals</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                                <li><a href="#" class="mega_trigger_2">Search Engine Marketing <i class="fas fa-chevron-down"></i></a>
                                    <div class="mega_menu_container mega_trigger_2_container">
                                        <div class="mega_menu_wrapper mega_trigger_2">
                                            <div class="mega_menu_left">
                                                <div>
                                                    <div class="mega_menu_left_heading">BUSINESS VERTICALS</div>
                                                    <h4>Learn how organizein can help any industry work from anywhere.
                                                    </h4>
                                                    <p class="small-txt">Technical partners for online advertising and
                                                        marketing companies</p>
                                                </div>
                                            </div>
                                            <div class="mega_menu_right ">
                                                <div class="mega_menu_coloum">
                                                    <div class="column_heading">Search Engine</div>
                                                    <div class="column_items">
                                                        <a class="item_data" href="https://www.organizein.com/google-search-ads/">Google
                                                            Search Ads</a>
                                                        <a class="item_data" href="https://www.organizein.com/google-display-ads/">Google
                                                            Display Ads</a>
                                                        <a class="item_data" href="https://www.organizein.com/google-remarketing-ads/">Google
                                                            Remarketing Ads</a>
                                                        <a class="item_data" href="https://www.organizein.com/google-mobile-ads/">Google
                                                            Mobile Ads</a>
                                                        <a class="item_data" href="https://www.organizein.com/google-shopping-ads/">Google
                                                            Shopping Ads</a>
                                                        <a class="item_data" href="https://www.organizein.com/google-video-ads/">Google
                                                            Video Ads</a>
                                                        <a class="item_data" href="https://www.organizein.com/microsoft-ads/">Microsoft
                                                            Ads</a>
                                                        <a class="item_data" href="https://www.organizein.com/yahoo-ads/">Yahoo
                                                            Ads</a>
                                                        <a class="item_data" href="https://www.organizein.com/amazon-ads/">Amazon
                                                            Ads</a>
                                                        <a class="item_data" href="https://www.organizein.com/spotify-ads/">Spotify
                                                            Ads</a>
                                                    </div>
                                                </div>
                                                <div class="mega_menu_coloum">
                                                    <div class="column_heading">Social Network</div>
                                                    <div class="column_items">
                                                        <a class="item_data" href="https://www.organizein.com/facebook-ads/">Facebook
                                                            Ads</a>
                                                        <a class="item_data" href="https://www.organizein.com/instagram-ads/">Instagram
                                                            Ads</a>
                                                        <a class="item_data" href="https://www.organizein.com/twitter-ads/">Twitter
                                                            Ads</a>
                                                        <a class="item_data" href="https://www.organizein.com/linkedin-ads/">LinkedIn
                                                            Ads</a>
                                                        <a class="item_data" href="https://www.organizein.com/youtube-ads/">Youtube
                                                            Ads</a>
                                                        <a class="item_data" href="https://www.organizein.com/snapchat-ads/">Snapchat
                                                            Ads</a>
                                                        <a class="item_data" href="https://www.organizein.com/taboola/">Taboola</a>

                                                        <a class="item_data" href="https://www.organizein.com/pinterest-ads/">Pinterest
                                                            Ads</a>
                                                    </div>

                                                </div>
                                                <div class="mega_menu_coloum">
                                                    <div class="column_heading">Mobile Network</div>
                                                    <div class="column_items">
                                                        <a class="item_data" href="https://www.organizein.com/admob/">AdMob</a>
                                                        <a class="item_data" href="https://www.organizein.com/adcolony/">AdColony</a>

                                                        <a class="item_data" href="https://www.organizein.com/tubemogul/">TubeMogul</a>

                                                        <a class="item_data" href="https://www.organizein.com/airpush/">Airpush</a>

                                                        <a class="item_data" href="https://www.organizein.com/one-by-aol/">ONE by
                                                            AOL</a>
                                                        <a class="item_data" href="https://www.organizein.com/inmobi/">Inmobi</a>

                                                        <a class="item_data" href="https://www.organizein.com/leadbolt/">LeadBolt</a>

                                                        <a class="item_data" href="https://www.organizein.com/ad-recover/">Ad
                                                            Recover</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                                <li><a href="#" class="mega_trigger_3">Digital Marketing <i class="fas fa-chevron-down"></i></a>
                                    <div class="mega_menu_container mega_trigger_3_container">
                                        <div class="mega_menu_wrapper mega_trigger_3">
                                            <div class="mega_menu_left">
                                                <div>
                                                    <div class="mega_menu_left_heading">OUR TOP SERVICES</div>
                                                    <h4>Digital Marketing
                                                        That Drives Revenue
                                                        Revenue</h4>
                                                    <p class="small-txt">Power Your Business To New
                                                        Height With Our Award Winning
                                                        Digital Marketing Services And
                                                        Technologies Platform</p>
                                                </div>
                                                <div class="serviceBtn">
                                                    <a href="https://www.organizein.com/seo/" class="allService">
                                                        <img src="https://www.organizein.com/wp-content/uploads/2021/01/allservice.png" alt="" srcset="" width="40px">
                                                        See All Services
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="mega_menu_right ">
                                                <div class="mega_menu_coloum">
                                                    <div class="column_heading">ATTRACT PROSPECTS</div>
                                                    <div class="column_items">
                                                        <a class="item_data" href="https://www.organizein.com/seo/">Search Engine
                                                            Optimization</a>
                                                        <a class="item_data" href="https://www.organizein.com/search-engine-marketing-seo/">Search
                                                            Engine Marketing</a>
                                                        <a class="item_data" href="https://www.organizein.com/mobile-advertising/">Mobile
                                                            Advertising</a>
                                                        <a class="item_data" href="https://www.organizein.com/influencer-marketing/">Influencer
                                                            Marketing</a>
                                                        <a class="item_data" href="https://www.organizein.com/branding-design/">Branding
                                                            &amp; Design</a>
                                                        <a class="item_data" href="https://www.organizein.com/managed-digital-service-360/">Managed
                                                            Digital Service 360</a>
                                                    </div>
                                                </div>
                                                <div class="mega_menu_coloum">
                                                    <div class="column_heading">BUID ENGAGEMENT</div>
                                                    <div class="column_items">
                                                        <a class="item_data" href="https://www.organizein.com/social-media-marketing-seo/">Social
                                                            Media Marketing</a>
                                                        <a class="item_data" href="https://www.organizein.com/re-marketing-ads/">Re-Marketing
                                                            Ads</a>
                                                        <a class="item_data" href="https://www.organizein.com/content-development-seo/">Content
                                                            Development</a>
                                                    </div>
                                                </div>
                                                <div class="mega_menu_coloum">
                                                    <div class="column_heading">TURN OPPORTUNITIES INTO CLIENTS</div>
                                                    <div class="column_items">
                                                        <a class="item_data" href="https://www.organizein.com/sms-marketing/">SMS
                                                            Marketing</a>
                                                        <a class="item_data" href="https://www.organizein.com/email-marketing-seo/">Email
                                                            Marketing</a>
                                                        <a class="item_data" href="https://www.organizein.com/crm-integrations-analytics/">CRM
                                                            Integrations &amp; Analytics</a>
                                                        <div class="digitalMarking">
                                                            <div>Digital Marketing Pricing
                                                            </div>
                                                            <a href="">view pricing</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                                <li><a href="#" class="mega_trigger_4">Development <i class="fas fa-chevron-down"></i></a>
                                    <div class="mega_menu_container mega_trigger_4_container">
                                        <div class="mega_menu_wrapper mega_trigger_4">
                                            <div class="mega_menu_left">
                                                <div>
                                                    <div class="mega_menu_left_heading">CUSTOM SOFTWARE DEVLOPMENT</div>
                                                    <h4>Transform your business through full-stack custom software
                                                        solutions
                                                    </h4>
                                                    <p class="small-txt">We cover mobile, web, app custom software
                                                        development for various verticals. <br>Our focus: your business
                                                        goals
                                                        and customers’ needs. </p>
                                                    <div class="serviceBtn">
                                                        <a href="https://www.organizein.com/seo/" class="allService">
                                                            <img src="https://www.organizein.com/wp-content/uploads/2021/01/allservice.png" alt="" srcset="" width="40px">
                                                            See All Services
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mega_menu_right ">
                                                <div class="mega_menu_coloum">
                                                    <div class="column_heading">WEB DEVELOPMENT</div>
                                                    <div class="column_items">
                                                        <a class="item_data" href="https://www.organizein.com/ecommerce-store/">eCommerce
                                                            Store</a>
                                                        <a class="item_data" href="https://www.organizein.com/php-web-development/">PHP
                                                            Web Development</a>

                                                        <a class="item_data" href="https://www.organizein.com/wordpress-development/">WordPress
                                                            Development</a>
                                                        <a class="item_data" href="https://www.organizein.com/chatbot-apps/">Chatbot
                                                            Apps</a></li736>
                                                        <a class="item_data" href="https://www.organizein.com/website-localization/">Website
                                                            Localization</a>

                                                    </div>
                                                </div>
                                                <div class="mega_menu_coloum">
                                                    <div class="column_heading">MOBILE APPLICATION</div>
                                                    <div class="column_items">
                                                        <a class="item_data" href="https://www.organizein.com/android-app-development/">Android
                                                            App
                                                            development</a>
                                                        <a class="item_data" href="https://www.organizein.com/ios-app-development/">iOS
                                                            App Development</a>
                                                        <a class="item_data" href="https://www.organizein.com/hybrid-apps/">Hybrid
                                                            Apps</a>
                                                        <a class="item_data" href="#">MVP Prototypes</a>
                                                    </div>
                                                </div>
                                                <div class="mega_menu_coloum">
                                                    <div class="column_heading">DOMAIN &amp; SERVER MANAGEMENT</div>
                                                    <div class="column_items">
                                                        <a class="item_data" href="https://www.organizein.com/dedicated-server-management/">Dedicated
                                                            Server
                                                            Management</a>
                                                        <a class="item_data" href="https://www.organizein.com/vps-shared-server-management/">VPS
                                                            &amp; Shared
                                                            Server Management</a>
                                                        <a class="item_data" href="https://www.organizein.com/ssl-certification-management/">SSL
                                                            Certification
                                                            Management</a>
                                                        <a class="item_data" href="https://www.organizein.com/qa-testing/">QA &amp;
                                                            Testing</a>
                                                        <a class="item_data" href="https://www.organizein.com/migration-services/">Migration
                                                            Services</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                                <li><a href="#" class="mega_trigger_5">Industry <i class="fas fa-chevron-down"></i></a>
                                    <div class="mega_menu_container mega_trigger_5_container">
                                        <div class="mega_menu_wrapper mega_trigger_5">
                                            <div class="mega_menu_left">
                                                <div>
                                                    <div class="mega_menu_left_heading">BUSINESS VERTICALS</div>
                                                    <h4>Learn how Organizein can help any industry work from anywhere.
                                                    </h4>
                                                    <p class="small-txt">Clients in a range of industries trust
                                                        Organizein to drive revenue. Check out the in-depth case studies
                                                        below to learn how we can drive real results for you too</p>
                                                </div>
                                                <div class="serviceBtn">
                                                    <a href="https://www.organizein.com/seo/" class="allService">
                                                        <img src="https://www.organizein.com/wp-content/uploads/2021/01/allservice.png" alt="" srcset="" width="40px">
                                                        See All Services
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="mega_menu_right ">
                                                <div class="mega_menu_coloum">
                                                    <div class="column_heading">Industry</div>
                                                    <div class="column_items">
                                                        <a class="item_data" href="https://www.organizein.com/financial-services/">Financial
                                                            Services</a>

                                                        <a class="item_data" href="https://www.organizein.com/healthcare-life-sciences/">Healthcare
                                                            &amp;
                                                            Life Sciences</a>
                                                        <a class="item_data" href="https://www.organizein.com/communications/">Communications</a>
                                                        <a class="item_data" href="https://www.organizein.com/retail/">Retail</a>
                                                        <a class="item_data" href="https://www.organizein.com/consumer-goods/">Consumer
                                                            Goods</a>
                                                        <a class="item_data" href="https://www.organizein.com/media-agencies/">Media
                                                            Agencies</a>
                                                        <a class="item_data" href="https://www.organizein.com/government/">Government</a>
                                                        <a class="item_data" href="https://www.organizein.com/manufacturing/">Manufacturing</a>
                                                        <a class="item_data" href="https://www.organizein.com/transportation-hospitality/">Transportation
                                                            &amp; Hospitality</a>
                                                        <a class="item_data" href="https://www.organizein.com/automotive/">Automotive</a>
                                                    </div>
                                                </div>
                                                <div class="mega_menu_coloum">
                                                    <div class="column_heading"></div>
                                                    <div class="column_items">
                                                        <a class="item_data" href="https://www.organizein.com/higher-education/">Higher
                                                            Education</a>
                                                        <a class="item_data" href="https://www.organizein.com/nonprofits/">Nonprofits</a>

                                                        <a class="item_data" href="https://www.organizein.com/professional-services/">Professional
                                                            Services</a>

                                                    </div>
                                                </div>
                                                <div class="mega_menu_coloum">
                                                    <div class="column_heading">BUSINESS TYPE</div>
                                                    <div class="column_items">
                                                        <a class="item_data" href="https://www.organizein.com/small-business/">Small
                                                            Business</a>
                                                        <a class="item_data" href="https://www.organizein.com/medium-sized-business/">Medium
                                                            sized business</a>

                                                        <a class="item_data" href="https://www.organizein.com/franchise-business/">Franchise
                                                            business</a>
                                                        <a class="item_data" href="https://www.organizein.com/enterprise/">Enterprise</a>

                                                        <a class="item_data" href="https://www.organizein.com/startups/">Startups</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                                <!-- <li><a href="#">Pricing</a></li> -->
                                <li><a href="#" class="mega_trigger_6">Support <i class="fas fa-chevron-down"></i></a>
                                    <div class="mega_menu_container mega_trigger_6_container">
                                        <div class="mega_menu_wrapper mega_trigger_6">
                                            <div class="mega_menu_left">


                                                <div>
                                                    <div class="mega_menu_left_heading">BUSINESAS VERTICALS</div>
                                                    <h4>Learn how Organizein can help any industry work from anywhere.
                                                    </h4>
                                                    <p class="small-txt">
                                                        Clients in a range of industries trust Organizein to drive
                                                        revenue. Check out the in-depth case studies below to learn how
                                                        we can drive real results for you too</p>
                                                    <div class="serviceBtn">
                                                        <a href="https://www.organizein.com/seo/" class="allService">
                                                            <img src="https://www.organizein.com/wp-content/uploads/2021/01/allservice.png" alt="" srcset="" width="40px">
                                                            See All Services
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mega_menu_right ">
                                                <div class="mega_menu_coloum">
                                                    <div class="column_heading">CUSTOMER STORIES</div>
                                                    <div class="column_items">
                                                        <a class="item_data" href="https://www.organizein.com/case-studies/">Case
                                                            Studies</a>
                                                        <a class="item_data" href="https://www.organizein.com/onboarding-services/">Onboarding
                                                            services</a>
                                                        <a class="item_data" href="https://www.organizein.com/client-testimonials/">Client
                                                            Testimonials</a>
                                                    </div>
                                                </div>
                                                <div class="mega_menu_coloum">
                                                    <div class="column_heading">RESOURCES</div>
                                                    <div class="column_items">
                                                        <a class="item_data" href="https://www.organizein.com/get-a-free-digital-audit-report/">Get
                                                            a free digital
                                                            audit report</a><a class="item_data" href="https://www.organizein.com/what-is-crm/">What is
                                                            CRM</a><a class="item_data" href="https://www.organizein.com/what-is-digital-marketing/">What
                                                            is Digital Marketing</a><a class="item_data" href="https://www.organizein.com/what-is-inbound-marketing/">What
                                                            is Inbound
                                                            Marketing</a><a class="item_data" href="https://www.organizein.com/what-is-search-engine-optimization/">What
                                                            is Search
                                                            Engine Optimization</a><a class="item_data" href="https://www.organizein.com/how-much-should-a-website-cost/">How
                                                            much should a
                                                            website cost?</a><a class="item_data" href="https://www.organizein.com/how-much-does-seo-cost/">How
                                                            much does SEO Cost?</a>

                                                    </div>
                                                </div>
                                                <div class="mega_menu_coloum">
                                                    <div class="column_heading">FAQ</div>
                                                    <div class="column_items">
                                                        <a class="item_data" href="https://www.organizein.com/service-faq/">Service
                                                            FAQ</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#" class="mega_trigger_7">About Us <i class="fas fa-chevron-down"></i></a>
                                    <div class="mega_menu_container mega_trigger_7_container">
                                        <div class="mega_menu_wrapper mega_trigger_7">
                                            <div class="mega_menu_left">
                                                <div>
                                                    <div class="mega_menu_left_heading">ABOUT US</div>
                                                    <h4>About Company
                                                        That Drives Revenue</h4>
                                                    <p class="small-txt">Power Your Business To New
                                                        Height With Our Award Winning
                                                        Digital Marketing Services And
                                                        Technologies Platform</p>
                                                </div>
                                                <div class="serviceBtn">
                                                    <a href="https://www.organizein.com/seo/" class="allService">
                                                        <img src="https://www.organizein.com/wp-content/uploads/2021/01/allservice.png" alt="" srcset="" width="40px">
                                                        See All Services
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="mega_menu_right ">
                                                <div class="mega_menu_coloum">
                                                    <div class="column_heading">About Us</div>
                                                    <div class="column_items">
                                                        <a class="item_data" href="https://www.organizein.com/our-story/">Our Story</a><a class="item_data" href="https://www.organizein.com/organizeinteam/">Team</a><a class="item_data" href="https://www.organizein.com/our-locations/">Locations</a><a class="item_data" href="https://www.organizein.com/timeline/">Timeline</a><a class="item_data" href="https://www.organizein.com/acquisitions-org/">Acquisitions</a>
                                                    </div>
                                                </div>
                                                <div class="mega_menu_coloum">
                                                    <div class="column_heading">Careers &amp; Culture</div>
                                                    <div class="column_items">
                                                        <a class="item_data" href="https://www.organizein.com/careers-org/">Careers</a><a class="item_data" href="https://www.organizein.com/our-culture/">Our
                                                            Culture</a><a class="item_data" href="https://www.organizein.com/internship-at-organizein/">Internship
                                                            at Organizein</a>
                                                    </div>
                                                </div>
                                                <div class="mega_menu_coloum">
                                                    <div class="column_heading">Partners</div>
                                                    <div class="column_items">
                                                        <a class="item_data" href="https://www.organizein.com/partner-with-us/">Partner
                                                            with us</a><a class="item_data" href="https://www.organizein.com/hire-a-partner/">Hire a
                                                            Partner</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                                <li><a href="#" class="contactus_btn ">contact us</a></li>
                            </ul>
                        </div>
                        <label id="icon">
                            <i class="fas fa-bars"></i>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <!------------------------- middel header section end  ------------------------------>



        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-60397574-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'UA-60397574-1');
        </script>

    </header>
    <!--------------------- header section end --------------------------->













    <!------------------------------- bannner Section start  --------------------------->
    <section class="Banner__Wraper">
        <div style="background-color: rgba(0,6,12,0.68); padding: 130px 0;width: 100%;">
            <div class="px-4" style="max-width: 1400px; margin:auto;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-12 col-lg-6 banner____ col-xl-6 mx-auto">
                            <div class="text___banner___header" style="padding: 0px 36px;">
                                <h1>Organizein <?php echo $city ?>'s Trusted IT & <?php echo $services ?> Agency
                                </h1>
                                <p>We will help you take advantage of all that the Internet has to offer. Having a solid
                                    inbound strategy with a high ROI is what every business strives for.
                                </p>
                            </div>
                            <div class="Three__logo__banner_bottom">
                                <a href="#"><img src="https://www.organizein.com/wp-content/uploads/2016/07/PartnerBadge-RGB-397-1-1-300x164.png" alt=""></a>
                                <a href="#"><img src="https://www.organizein.com/wp-content/uploads/2016/07/connectlabs-platinum-hubspot-partner.png" alt=""></a>
                                <a href="#"><img src="https://www.organizein.com/wp-content/uploads/2016/07/bing.png" alt=""></a>
                                <!-- <a class="Services___btn" href="#">Services</a>
                                <a href="#">About us</a> -->
                            </div>
                        </div>
                        <div class="col-md-6 col-12 col-lg-6 banner____ col-xl-6 mx-auto">
                            <form action="<?= $actual_link ?>/multipageadmin/auth/inquiry_handler.php" method="post" class="contactForm">
                                <input type="hidden" name="contact_form" value="form-1" />
                                <input type="hidden" name="current_url" value="<?= $current_url ?>">
                                <div class="formHeader">Let’s Get Started, Get in touch now!</div>
                                <input type="text" name="name" id="name" class="inputField" placeholder="Full Name" required>
                                <input type="text" name="email" id="email" class="inputField" placeholder="Email" required>
                                <input type="text" name="website_link" id="websiteLink" class="inputField" placeholder="Website Link" required>
                                <select name="services_interested" class="form-select inputField" aria-label="Default select example">
                                    <option selected>Services Interested in?</option>
                                    <option value="IT Services">IT Services </option>
                                    <option value="" value="Web Design & Development">Web Design & Development </option>
                                    <option value="Mobile Application Development">Mobile Application Development </option>
                                    <option value="CRM Development & Integrations">CRM Development & Integrations </option>
                                    <option value="SRS Document Development">SRS Document Development </option>
                                    <option value="User Interface & Wireframes">User Interface & Wireframes </option>
                                    <option value="Hosting, Domain & Server Management">Hosting, Domain & Server Management </option>
                                    <option value="App MVP Prototypes">App MVP Prototypes </option>
                                    <option value="Custom Business Dashboard development">Custom Business Dashboard development </option>
                                    <option value="AI & Chat Bots Development">AI & Chat Bots Development </option>
                                    <option value="Digital Marketing">Digital Marketing </option>
                                    <option value="SEO">SEO</option>
                                    <option value="SEM">SEM</option>
                                    <option value="SMM">SMM</option>
                                    <option value="Email">Email </option>
                                    <option value="SMS Marketing">SMS Marketing </option>
                                    <option value="Influencer Marketing">Influencer Marketing </option>
                                    <option value="Whats App Marketing">Whats App Marketing </option>
                                    <option value="ABM Campaings (Account Based Marketing)">ABM Campaings (Account Based Marketing) </option>
                                    <option value="Inbound Marketing">Inbound Marketing </option>
                                    <option value="Branding">Branding </option>
                                    <option value="Logo Designing">Logo Designing</option>
                                    <option value="Brand identity">Brand identity </option>
                                    <option value="Marketing Collaterals">Marketing Collaterals </option>
                                </select>
                                <input type="text" name="phone" id="mobNumber" class="inputField" placeholder="Phone Number" required>
                                <!-- <div class="g-recaptcha mt-2" data-sitekey="6Lc1uigeAAAAADXQ0y8j1Qt6x1UznrzyoIiG279B"
                                    style="text-align: center;"></div> -->
                                <button type="submit" class="contactFormBtn contactus_btn">Contact us now</button>
                            </form>
                            <!-- <div class="Three__logo__banner">
                            <a class="Services___btn" href="#">Services</a>
                            <a href="#">About us</a>
                        </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="Wrp_____100">
        <div class="Warper___header px-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-12 max____width__ col-lg-12 after___banner___text col-xl-12 mx-auto">
                        <p>
                            The online marketing industry is growing at an unparalleled pace. Businesses the world over
                            spend over billions on digital campaigns. With more and more businesses investing time and
                            money in online marketing, it is no longer enough to rely on old advertising tactics. You
                            have to create a solid digital presence and adopt value-driven strategies. Our digital
                            marketing strategies and expert team can help your business achieve that.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!------------------------------- bannner Section end  --------------------------->



    <!------------------------ section of HAPPY CUSTOMERS start  ----------------------->


    <section>
        <div class="Warper___header px-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 max____width__ col-12 col-lg-12 HAPPY__CUSTOMERS col-xl-12 mx-auto">
                        <div class="customer____content">
                            <h3>JOIN OUR HAPPY CUSTOMERS</h3>
                            <div class="Customers__logo">
                                <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/sameday.png" alt="" class="img-fluid" />
                                <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/payswiff.png" alt="" class="img-fluid" />
                                <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/Smart-1.png" alt="" class="img-fluid" />
                                <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/m.png" alt="" class="img-fluid" />
                                <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/cruise san diego.png" alt="" class="img-fluid" />
                                <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/peak.png" alt="" class="img-fluid" />
                                <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/Ray White.png" alt="" class="img-fluid" />
                                <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/Cmitsolutions.png" alt="" class="img-fluid" />
                                <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/bmw.png" alt="" class="img-fluid" />
                                <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/verify.png" alt="" class="img-fluid" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!------------------------ section of HAPPY CUSTOMERS end  ----------------------->












    <!------------ section of Be Dynamic, Innovative and Insightful start  ------------------------->

    <section class="secton__of__innovative">
        <div class="Warper___header px-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 max____width__ col-md-12 col-xl-12 col-lg-12 mx-auto">
                        <div class="row">
                            <div class="col-md-8 col-12 col-lg-8 Innovative_____  col-xl-8 mx-auto">
                                <h4>
                                    Be Dynamic, Innovative and Insightful
                                </h4>
                                <p class="First___text___details">
                                    Outbound marketing annoys your target audience with content they don’t necessarily
                                    need. Inbound marketing forges connections and solves problems they already have.
                                    Our well proven Inbound marketing strategies and tactics develops a system that
                                    attracts customers by delivering valuable content and tailored experiences.
                                </p>
                                <p>
                                    Our clients exceed their goals, thanks to our winning combo — experienced digital
                                    marketers and the insightful platform – Organizein KPI Dashboard. We have engineered
                                    a customized software platform designed to help clients make smarter decisions using
                                    our in-house marketing KPI tools.
                                </p>
                            </div>
                            <div class="col-md-4 col-12 col-lg-4 col-xl-4 mx-auto">
                                <div class="Wprer___computer">
                                    <img onclick="toggle()" src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/impplay-button-min-min.png" alt="" class="img-fluid overly___Start" />

                                    <div id="Wraper___video" class="video___poopup">
                                        <div class="if__controler">
                                            <iframe id="video" width="900" height="600" src="https://www.youtube.com/embed/p_Psvj8hUm8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                                            </iframe>
                                            <img onclick="toggle()" src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/closebtn.png" alt="" class="img-fluid close____" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <!------------ section of Be Dynamic, Innovative and Insightful end  ------------------------->





    <!---------------------- section of  Digital Marketing Services start  ------------------------->
    <section class="Digital__Marketing__Services">
        <div class="Warper___header px-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 max____width__ col-12 Marketing______ col-lg-12 col-xl-12 mx-auto">
                        <h6 class="text-center py-5">Digital Marketing Services</h6>
                        <p>By using email, mobile messages, social media acquisitions, and Web promoting, you can drive
                            relatively more traffic. Here are few of our most popular marketing services
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- <section class="Digital__Marketing______container">
        <div class="single__margkein text-center">
            <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/SEO-Organizein-USA.png" alt="" class="img-fluid digital_marketing_img" />
            <h3>SEO</h3>
            <p>Our search engine optimization strategies are formulated with careful analysis of how
                your clients and audience finds, consumes or purchases</p>
        </div>

        <div class="single__margkein text-center">
            <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/PPC-Services-Organizein01.png" alt="" class="img-fluid digital_marketing_img" />
            <h3>Search Engine Marketing</h3>
            <p>Our Search Engine Marketing Service(SEM) services aid you in growing your business by generating quality
                leads and valuable sales to your enterprise.</p>
        </div>

        <div class="single__margkein text-center">
            <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/social media marketing.png" alt="" class="img-fluid digital_marketing_img" />
            <h3>Social Media Marketing</h3>
            <p>Use the social media platforms and websites to promote a product or service
            </p>
        </div>

        <div class="single__margkein text-center">
            <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/Chatbot-Apps it service.png" alt="" class="img-fluid digital_marketing_img" />
            <h3>Email Marketing</h3>
            <p>Promote your products and sell your services through our Email Campaigns.</p>
        </div>

        <div class="single__margkein text-center">
            <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/80.png" alt="" class="img-fluid digital_marketing_img" />
            <h3>SMS Marketing</h3>
            <p>Statistics show SMS open rates are as high as 98%, and that’s higher than any other marketing channel.
            </p>
        </div>

        <div class="single__margkein text-center">
            <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/influencer.png" alt="" class="img-fluid digital_marketing_img" />
            <h3>Influencer Marketing</h3>
            <p>To reach your target audience and drive your brand's message to the larger market.
            </p>
        </div>

        <div class="single__margkein text-center">
            <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/WhatsApp_Business_Organizein.png" alt="" class="img-fluid digital_marketing_img" />
            <h3>Whatsapp Marketing</h3>
            <p>We Incorporate Formation and execution of social media campaigns....</p>
        </div>

        <div class="single__margkein text-center">
            <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/AMB_Organizein.png" alt="" class="img-fluid digital_marketing_img" />
            <h3>ABM Campaings</h3>
            <p>Account based marketing (ABM) is a business marketing strategy that concentrates resources on a set of
                target accounts within a market.</p>
        </div>

        <div class="single__margkein text-center">
            <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/inbound-marketing-usa-organizein.png" alt="" class="img-fluid digital_marketing_img" />
            <h3>Inbound Marketing </h3>
            <p>With the use of multiple channels, we can proactively increase the quality traffic
                you receive. With this increase in your audience, you will be able to reach</p>
        </div>
        <div class="single__margkein text-center">
            <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/youtube.png" alt="" class="img-fluid digital_marketing_img" />
            <h3>Youtube Ads </h3>
            <p>our highly talented team in increasing traffics through youtube ads.</p>
        </div>
        <div class="single__margkein text-center">
            <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/remarketing.png" alt="" class="img-fluid digital_marketing_img" />
            <h3>Re-Marketing Campaigns </h3>
            <p>Our world class remarketing ad agency will assist you to get the best possible return. Keeping in mind
                that only 2% of visitors purchase from their first visit on your website,</p>
        </div>
        <div class="single__margkein text-center">
            <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/google ads.png" alt="" class="img-fluid digital_marketing_img" />
            <h3>Google Ads</h3>
            <p>Our highly talented team of content writers and editors provide you the most authentic and attractive
                content as google ads</p>
        </div>
    </section> -->

    <section class="Digital__Marketing______container" style="grid-template-columns: repeat(auto-fit , minmax(300px , 1fr)); gap: 50px;">
        <div class="single__margkein text-center">
            <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/Webdesign-USA-Organizein.png" alt="" class="img-fluid" />
            <h3>Web Design</h3>
            <p>We design super responsive and mobile optimized websites that deliver rich content in
                an organized manner to your audience.</p>
            <a href="https://www.organizein.com/web-design-services/"> Click here to View </a>
        </div>

        <div class="single__margkein text-center">
            <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/SEO-Organizein-USA.png" alt="" class="img-fluid" />
            <h3>Search Engine Optimization</h3>
            <p>Our search engine optimization strategies are formulated with careful analysis of how
                your clients and audience finds, consumes or purchases</p>
            <a href="https://www.organizein.com/seo-services/"> Click here to View </a>
        </div>

        <div class="single__margkein text-center">
            <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/inbound-marketing-usa-organizein.png" alt="" class="img-fluid" />
            <h3>Inbound marketing</h3>
            <p>With the use of multiple channels, we can proactively increase the quality traffic
                you receive. With this increase in your audience, you will be able to reach</p>
            <a href="https://www.organizein.combound-marketing/?_ga=2.47493295.903797179.1642499480-101747074.1642499480">
                Click here to View </a>
        </div>

        <div class="single__margkein text-center">
            <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/PPC-Services-Organizein01.png" alt="" class="img-fluid" />
            <h3>Pay Per Click Campaigns</h3>
            <p>PPC is a proven way of increasing traffic to your website, but unless you get quality
                traffic, you won’t be able to get a better ROI.</p>
            <a href="https://www.organizein.com/pay-per-click/"> Click here to View </a>
        </div>

        <div class="single__margkein text-center">
            <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/Email-Marketing-Organizein-USA.png" alt="" class="img-fluid" />
            <h3>Email Campaigns</h3>
            <p>You can promote brand recognition and awareness through email newsletters with your
                existing subscribers and some potential leads to get new subscribers.</p>
            <a href="https://www.organizein.com/email-marketing-services/"> Click here to View </a>
        </div>

        <div class="single__margkein text-center">
            <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/Social-Media-Services-USA.png" alt="" class="img-fluid" />
            <h3>Social Media Marketing</h3>
            <p>We Incorporate Formation and execution of social media campaigns, audits, policy
                development and crisis management in our offering.</p>
            <a href="https://www.organizein.com/social-media-marketing-services/"> Click here to View </a>
        </div>
    </section>

    <!---------------------proposal banner is here-->
    <div class="proposalBanner_outer">
        <div class="preposalBanner">
            <div class="bannerContent">
                <div class="headingContent">
                    <h1>Ready To Grow? Get Your Free Proposal Today:</h1>
                    <p>Take the next step in growing your business using digital marketing. Connect with one of our
                        expert
                        digital strategists to learn how WebFx can help you reach your business goals.</p>
                    <form action="<?= $actual_link ?>/multipageadmin/auth/inquiry_handler.php" method="post">
                        <input type="hidden" name="contact_form" value="form-2" />
                        <input type="email" class="websiteInput" name="email" placeholder="Email" required>
                        <input type="hidden" name="current_url" value="<?= $current_url ?>">
                        <input type="text" class="websiteInput" name="website_link" placeholder="Enter Your website" required>
                        <button type="submit" class="proposalBtn">Send me a proposal <i class="fas fa-arrow-right"></i></button>
                    </form>
                </div>
                <div class="owl-carousel owl-theme imageConent">
                    <img class="item" src="https://www.organizein.com/wp-content/uploads/2021/08/cm-02-1-1.png" alt=">>>>>">
                    <img class="item" src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/banner/123travel-02.png" alt=">>>>>">
                    <img class="item" src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/banner/Afamado-02.png" alt=">>>>>">
                    <img class="item" src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/banner/Aman-educatio-02.png" alt=">>>>>">
                    <img class="item" src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/banner/Arohan-Yoga-02.png" alt=">>>>>">
                    <img class="item" src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/banner/Auto-Spa-America-02.png" alt=">>>>>">
                </div>
            </div>
        </div>
    </div>


    <section class="Digital__Marketing__Services">
        <div class="Warper___header px-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 max____width__ col-12 Marketing______ col-lg-12 col-xl-12 mx-auto">
                        <h6 class="text-center py-5">IT & Digital Marketing Services</h6>
                        <!-- <p>By using email, mobile messages, social media acquisitions, and Web promoting, you can drive
                            relatively more traffic. Here are few of our most popular marketing services
                        </p> -->
                    </div>
                </div>
            </div>

        </div>
    </section>


    <section class="Digital__Marketing______container">
        <div class="single__margkein text-center">
            <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/webdesign-image1.png" alt="" class="img-fluid digital_marketing_img" />
            <h3>Web Design & Development</h3>
            <p>We design super responsive and mobile optimized websites that deliver rich content in
                an organized manner to your audience.</p>
        </div>
        <div class="single__margkein text-center">
            <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/Android-App-Development it services.png" alt="" class="img-fluid digital_marketing_img" />
            <h3>Mobile Application Development</h3>
            <p>Being a leading Android App Development agency, Organizein aids you in developing powerful android
                applications that facilitates your enterprise to bloom exponentially.</p>
        </div>
        <div class="single__margkein text-center">
            <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/CRM_Organizein.png" alt="" class="img-fluid digital_marketing_img" />
            <h3>CRM Development & Integrations</h3>
            <p>Our CRM analytics service includes programming that analyses data about a company’s client database</p>
        </div>
        <div class="single__margkein text-center">
            <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/SRS_Docs_Organizein.png" alt="" class="img-fluid digital_marketing_img" />
            <h3>SRS Document Development </h3>
            <p>We also develop and describes the functionality the product needs to fulfill all stakeholders (business,
                users) needs.</p>
        </div>
        <div class="single__margkein text-center">
            <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/User-Interface_Organizein.png" alt="" class="img-fluid digital_marketing_img" />
            <h3>User Interface & Wireframes</h3>
            <p>we also develop skeleton of the eventual user interface. It's a low fidelity sketch (sometimes literally
                a pen and paper sketch) of the UI.</p>
        </div>
        <div class="single__margkein text-center">
            <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/Hosting_Organizein.png" alt="" class="img-fluid digital_marketing_img" />
            <h3>Hosting, Domain & Server Management</h3>
            <p>Our top-rated dedicated server management service enables you to boost your rank in search engines With
                the ability to set up different Operating Systems(OSes)</p>
        </div>
        <div class="single__margkein text-center">
            <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/MVP_Prototypes_Organizein.png" alt="" class="img-fluid digital_marketing_img" />
            <h3>App MVP Prototypes </h3>
            <p>We provides best MVP (minimum viable product) app prototypes.An MVP is all about testing your idea and
                discovering what will work to properly target your customer. </p>
        </div>
        <div class="single__margkein text-center">
            <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/SEO-Organizein-USA.png" alt="" class="img-fluid digital_marketing_img" />
            <h3>Custom Business Dashboard development</h3>
            <p>We design super responsive and mobile optimized custom business dashboard for your company website</p>
        </div>
        <!-- <div class="single__margkein text-center">
            <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/Chatbot-Apps it service.png" alt="" class="img-fluid digital_marketing_img" />
            <h3>CAI & Chat Bots Development</h3>
            <p>Being a professional chatbot development agency, we comprehend your firm’s requirements and provide the
                right solution that matches your custom needs.</p>
        </div>
        <div class="single__margkein text-center">
            <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/google ads.png" alt="" class="img-fluid digital_marketing_img" />
            <h3>Front-End development </h3>
            <p>Being a professional Front-End development agency, we comprehend your firm’s requirements and provide the
                right solution that matches your custom needs.</p>
        </div>
        <div class="single__margkein text-center">
            <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/ECommerce-Store-271x300.png" alt="" class="img-fluid digital_marketing_img" />
            <h3>eCommerce Solution </h3>
            <p>Our ECommerce portal expands your online traffic and sales. We provide a custom and unique design for
                platforms such as Woo Commerce and Search Engine Optimization(SEO)</p>
        </div>
        <div class="single__margkein text-center">
            <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/youtube.png" alt="" class="img-fluid digital_marketing_img" />
            <h3>Web Maintenance</h3>
            <p>we peovide a better and reasonable way of Web Maintenance that incrase your web productivity.</p>
        </div> -->

    </section>


    <!---------------------- section of  Digital Marketing Services end  ------------------------->






    <!-------------------- section of Maximize your Sales start  ----------------------->
    <section class="Maximize____Wraper">
        <div class="Warper___header px-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 max____width__ col-md-12 col-xl-12 col-xxl-12 col-lg-12 mx-auto">
                        <div class="row">
                            <div class="col-md-6 col-12 Maximize____img col-lg-6 col-xl-6 mx-auto">
                                <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/sd-Marketing-Services-Agency-1-1-copy-min.png" alt="" class="img-fluid" />
                            </div>
                            <div class="col-md-6 col-12 Maximize____ col-lg-6 col-xl-6 mx-auto">
                                <h2>
                                    Maximize your Sales with a robust Inbound Marketing Strategy
                                </h2>
                                <p>
                                    We will help you take advantage of all that the Internet has to offer. Having a
                                    solid inbound strategy with a high ROI is what every business strives for.
                                    Traditional marketing practices are obsolete as they cost more and pull in very
                                    little ROI. With inbound marketing, you will not face rejections like you would with
                                    telemarketing. You will be the one calling the shots with your potential customer
                                    calling you instead of you calling them. With years of exposure in this field, we
                                    believe our strategies are just what your business needs to attain a substantial
                                    market share on the Internet. With our services you can,
                                </p>
                                <ul>
                                    <li>Reach a wider range of Potential clients</li>
                                    <li>Get quick and stable results</li>
                                    <li>Get better responses</li>
                                    <li>Acquire long-term exposure</li>
                                    <li>Increase your brand awareness</li>
                                    <li>Engage with customers directly</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-------------------- section of Maximize your Sales end  ----------------------->







    <!------------------- section of Client Acquisition Solutions start  ------------------------->
    <section class="py-5">
        <div class="Warper___header px-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 max____width__ col-md-12 text-center Client___Acquisition  col-lg-12 col-xl-12 mx-auto">
                        <h3>Client Acquisition Solutions</h3>
                        <p>The art of gaining new consumers or persuading consumers to purchase your products and
                            services. Most business organizations measure the cost of customer acquisition by evaluating
                            how much value customers bring to their businesses. Successful customer acquisition
                            strategies include referrals, loyalty programs and the like. One can think of it as the link
                            between advertising and customer relationship, as it is the critical component that
                            facilitates the acquisition of customers in a targeted and effective way.</p>
                        <p>
                            Customer acquisition management refers to the set of methods and systems for handling
                            customer prospects and inquiries that are generated by marketing techniques. Effective
                            customer acquisition requires considerable planning and strategizing. Even though there are
                            a variety of customer acquisition strategies, some methods are more effective with certain
                            client categories. There are also a few essential steps that is integral to any customer
                            acquisition plan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!------------------- section of Client Acquisition Solutions end  ------------------------->





    <!---------------------- section of Responsive Web Designing start ----------------------->

    <section class="py-5">
        <div class="Warper___header px-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 max____width__ col-lg-12 col-xl-12 col-xxl-12 mx-auto">
                        <div class="row">
                            <div class="col-12 col-md-5 Responsive______img col-xl-5 col-lg-5 mx-auto">
                                <img onclick="toggle1()" src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/impplay-button-min-min.png" alt="" class="img-fluid" />
                                <div class="video___poopup1">
                                    <div class="if__controler">
                                        <iframe class="secound__iframe" width="900" height="600" src="https://www.youtube.com/embed/M4P2KcOb95o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        <img onclick="toggle1()" src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/closebtn.png" alt="" class="img-fluid close____1" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-7 Responsive______ col-xl-7 col-lg-7 mx-auto">
                                <h3>Responsive Web Designing</h3>
                                <p>We are in the era of Smartphones. Your website should therefore, adapt itself to
                                    cater to audience that uses mobile phones to access internet. In fact, your website
                                    should be accessible and clearly visible in all forms of devices including tablets
                                    and smartphones. Our responsive web designing services will help you make your
                                    website adaptive enough for all devices. We provide customised responsive web design
                                    services with or without ongoing maintenance services to a wide range of industries.
                                    We also offer web hosting and domain registration services.</p>
                                <a href="#">Learn More our Web designing Services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="py-5">
        <div class="Warper___header px-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 max____width__ col-md-12 col-xl-12 col-xl-12 col-xxl-12 mx-auto">
                        <div class="row">
                            <div class="col-12 col-md-7 Responsive______ col-xl-7 col-lg-7 mx-auto">
                                <h3>Search Engine Optimization</h3>
                                <p>Unfortunately, if your business is not easy to find on World Wide Web, most of your
                                    potential customers would never be able to find it. You will not be able to get
                                    enough sales and inquiries. No matter what quality of services or products you
                                    offer, you will not be considered seriously. The only solution to this problem is to
                                    make your business visible to most of your potential customers. Our ‘up-to-date’
                                    search engine optimization services will help you achieve the visibility that your
                                    business deserves.</p>
                                <a href="#">Learn More about Search Engine Optimization</a>
                            </div>
                            <div class="col-12 col-md-5 Responsive______img2 col-xl-5 col-lg-5 mx-auto">
                                <div>
                                    <img onclick="toggle2()" src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/impplay-button-min-min.png" alt="" class="img-fluid" />
                                </div>

                                <div class="video___poopup2">
                                    <div class="if__controler">
                                        <iframe class="Third___iframe" width="900" height="600" src="https://www.youtube.com/embed/2H_FeNvqxtc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        <img onclick="toggle2()" src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/closebtn.png" alt="" class="img-fluid close____2" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <section class="py-5">
        <div class="Warper___header px-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 max____width__ col-md-12 col-xl-12 col-lg-12 col-xxl-12 mx-auto">
                        <div class="row">
                            <div class="col-12 col-md-5 Responsive______img3 col-xl-5 col-lg-5 mx-auto">
                                <img onclick="toggle3()" src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/impplay-button-min-min.png" alt="" class="img-fluid" />
                                <div class="video___poopup3">
                                    <div class="if__controler">
                                        <iframe class="Forth___iframe" width="900" height="600" src="https://www.youtube.com/embed/99XseKQQePY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        <img onclick="toggle3()" src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/closebtn.png" alt="" class="img-fluid close____3" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-7 Responsive______ col-xl-7 col-lg-7 mx-auto">
                                <h3>Pay Per Click Campaigns</h3>
                                <p>PPC is a proven way of increasing traffic to your website, but unless you get quality
                                    traffic, you won’t be able to get a better ROI. If you are looking for more quality
                                    leads that have a higher potential of being converted, you are at the right place.
                                    The team at Organizein is completely determined to focus more on increasing your
                                    return on investment and conversion rate instead of just bothering about the traffic
                                    numbers. If you have experienced poor PPC results in the past, it’s high time you
                                    must try us and experience the difference.</p>
                                <a href="#">Learn More about Pay Per Click Marketing</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>


    <!---------------------- section of Responsive Web Designing end ----------------------->





    <!------------------------- section of Gets REAL RESULTS start  ------------------->
    <section class="Maximize____Wraper Maximize____Wraper2">
        <div class="Warper___header px-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 max____width__ col-md-12 col-lg-12 col-xl-12 col-xxl-12 mx-auto">
                        <div class="row">
                            <div class="col-md-6 col-12 Maximize____  Maximize____2 col-lg-6 col-xl-6 mx-auto">
                                <h2>
                                    Are you ready for Wonderful Growth? Get a Free Quote Today
                                </h2>
                                <p class="p__storn">
                                    Our clients exceed their goals, thanks to our winning combo — experienced digital
                                    marketers and the insightful platform – Organizein KPI Dashboard.


                                </p>
                                <!--    <p class="p__storn2">
                                    Ready in as few as 5 business days**<br />
                                    Includes free domain, hosting, and updates for 1 year<br />
                                    Free Google Listing on Maps & Local Business<br />

                                </p>
                                <div><a class="View___pricing" href="#"> View pricing </a></div> -->
                                <div class="customBtn"><a href="#" class="contactus_btn">Contact Us</a></div>

                            </div>
                            <div class="col-md-6 col-12 Maximize____img Maximize____img2 col-lg-6 col-xl-6 mx-auto">
                                <div class="Ready____img">
                                    <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/social-media-team-member-1.png" alt="" class="img-fluid" />
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!------------------------- section of Gets REAL RESULTS end  ------------------->

    <!-- section of marketing card -->

    <section class="Digital__Marketing______container">
        <div class="single__margkein text-center">
            <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/80.png" alt="" class="img-fluid digital_marketing_img" />
            <h3>SMS Marketing</h3>
            <p>Statistics show SMS open rates are as high as 98%, and that’s higher than any other marketing channel.
            </p>
        </div>

        <div class="single__margkein text-center">
            <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/influencer.png" alt="" class="img-fluid digital_marketing_img" />
            <h3>Influencer Marketing</h3>
            <p>To reach your target audience and drive your brand's message to the larger market.
            </p>
        </div>

        <div class="single__margkein text-center">
            <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/WhatsApp_Business_Organizein.png" alt="" class="img-fluid digital_marketing_img" />
            <h3>Whatsapp Marketing</h3>
            <p>We Incorporate Formation and execution of social media campaigns....</p>
        </div>

        <div class="single__margkein text-center">
            <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/AMB_Organizein.png" alt="" class="img-fluid digital_marketing_img" />
            <h3>ABM Campaings</h3>
            <p>Account based marketing (ABM) is a business marketing strategy that concentrates resources on a set of
                target accounts within a market.</p>
        </div>

        <div class="single__margkein text-center">
            <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/inbound-marketing-usa-organizein.png" alt="" class="img-fluid digital_marketing_img" />
            <h3>Inbound Marketing </h3>
            <p>With the use of multiple channels, we can proactively increase the quality traffic you receive. With this
                increase in your audience, you will be able to reach</p>
        </div>
        <div class="single__margkein text-center">
            <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/youtube.png" alt="" class="img-fluid digital_marketing_img" />
            <h3>Youtube Ads </h3>
            <p>our highly talented team in increasing traffics through youtube ads.</p>
        </div>
        <div class="single__margkein text-center">
            <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/remarketing.png" alt="" class="img-fluid digital_marketing_img" />
            <h3>Re-Marketing Campaigns </h3>
            <p>Our world class remarketing ad agency will assist you to get the best possible return. Keeping in mind
                that only 2% of visitors purchase from their first visit on your website,</p>
        </div>
        <div class="single__margkein text-center">
            <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/google ads.png" alt="" class="img-fluid digital_marketing_img" />
            <h3>Google Ads</h3>
            <p>Our highly talented team of content writers and editors provide you the most authentic and attractive
                content as google ads</p>
        </div>
    </section>

    <!-- section end -->



    <!---------------------------- new section of seo ecommerce start ------------------->
    <!-- <section class="my-5">

        <div class="Warper___header px-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 max____width__ col-md-12 col-xl-12 col-lg-12 col-xxl-12 mx-auto">
                        <div class="row">
                            <div class="col-12 p-4 col-md-6 col-lg-6 col-xl-6 mx-auto">
                                <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/Screenshot_11.png" alt="" class="img-fluid">
                            </div>

                            <div class="col-12 Seo__details___ col-md-6 col-lg-6 col-xl-6 mx-auto">
                                <h4>How Does Our Ecommerce SEO Service Work?</h4>
                                <p>Keyword Formation: Our process embarks with research identification and the most
                                    common keyphrases that are used by users.The keywords that we use after extensive
                                    research will enable you to rank higher in search engines. We implement high-value,
                                    pertinent keywords onto your portal. Product page optimization: We optimize all your
                                    portal pages for search engines. Since product pages are highly important, we make
                                    sure that all your pages have exclusive titles that will optimise your product page.
                                    By incorporating relevant images, we make your product page look attractive.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section> -->



    <!---------------------------- new section of seo ecommerce start ------------------->





    <!------------------------------- Why Are We The Best? start  ----------------->
    <!-- <section class="my-5 py-5 choose___best___section">

        <div class="Warper___header px-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 max____width__ col-md-12 col-xl-12 col-lg-12 col-xxl-12 mx-auto">
                        <div class="row">
                            <div class="col-12 Seo__details___  col-md-6 col-lg-6 col-xl-6 mx-auto">
                                <h4>Why Are We The Best?</h4>
                                <p>Unlike other e-commerce SEO service agencies, we are passionate about what we do.
                                    These are the following features of our service that help us to stand out from the
                                    competition;</p>
                                <ul>
                                    <li><i class="fas fa-caret-right"></i> Highly Qualified Team</li>
                                    <li><i class="fas fa-caret-right"></i> Transparent & ethical workforce</li>
                                    <li><i class="fas fa-caret-right"></i> Reasonable Costing</li>
                                    <li><i class="fas fa-caret-right"></i> Unified full service digital marketing
                                        approach to aid you with search engine marketing and paid advertisement on
                                        various platforms</li>

                                </ul>
                            </div>
                            <div class="col-12 p-3 col-md-6 col-lg-6 col-xl-6 mx-auto">
                                <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/Screenshot_1-removebg-preview.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section> -->
    <!------------------------------- Why Are We The Best? end ----------------->




    <!------------------------------ commerce SEO start -------------------------------->
    <!-- <section>
        <div class="Warper___header px-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 max____width__ col-md-12 col-xl-12 col-lg-12 col-xxl-12 mx-auto">
                        <div class="row">
                            <div class="col-12 p-4 col-md-6 col-lg-6 col-xl-6 mx-auto">
                                <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/Screenshot_2.png" alt="" class="img-fluid">
                            </div>
                            <div class="col-12 Seo__details___ Seo__details___2 col-md-6 col-lg-6 col-xl-6 mx-auto">
                                <h4>What are the benefits of e-commerce SEO?</h4>
                                <p>There are countless benefits to setting up an e-commerce SEO strategy. Here are the
                                    top 3 benefits to e-commerce SEO:</p>
                                <ul>
                                    <li><i class="fas fa-caret-right"></i> Improving your user experience</li>
                                    <li><i class="fas fa-caret-right"></i> Expanding your reach</li>
                                    <li><i class="fas fa-caret-right"></i> Increasing brand awareness</li>
                                    <li><i class="fas fa-caret-right"></i> Link building</li>

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section> -->
    <!------------------------------ commerce SEO end -------------------------------->







    <!-------------------------------------- completion of the work!! start --------------------->
    <section class="completion__work">
        <div class="Warper___header px-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 max____width__ col-md-12 col-xl-12 col-lg-12 col-xxl-12 mx-auto">
                        <div class="row">
                            <div class="col-12 p-5 text-center completion__work1 col-md-12 col-lg-12 col-xl-12 mx-auto">
                                <h2>We will build your website in the next 5 days, only pay us on completion of the
                                    work!!</h2>
                                <a href="https://www.organizein.com/contact-us/" style="background-color: #ffc501;">Work
                                    with us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-------------------------------------- completion of the work!! end --------------------->













    <!-------------------------------- section of Automation start --------------------------->
    <section class="py-5">
        <div class="Warper___header px-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 max____width__ col-md-12 text-center Client___Acquisition  col-lg-12 col-xl-12 mx-auto">
                        <h3>Build better connections with leads and customers</h3>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-------------------------------- section of Automation end --------------------------->













    <!---------------------- section of Lead Scoring services start ----------------------->

    <!-- <section class="py-5">
    <div class="Warper___header px-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 max____width__ col-md-12 col-xl-12 col-lg-12 col-xxl-12 mx-auto">
                    <div class="row">
                        <div class="col-12 col-md-5 Responsive______imgX col-xl-5 col-lg-5 mx-auto">
                            <img onclick = "toggle4()" src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/impplay-button-min-min.png" alt="" class="img-fluid" />
                            <div class="video___poopup4">
                                <div class="if__controler">
                                <iframe class="fifth__iframe" width="900" height="600" src="https://www.youtube.com/embed/q8yWbptCIz8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <img onclick = "toggle4()" src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/closebtn.png" alt="" class="img-fluid close____4" />
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-7 Responsive______ col-xl-7 col-lg-7 mx-auto">
                            <h3>Responsive Web Designing</h3>
                            <p>We are in the era of Smartphones. Your website should therefore, adapt itself to cater to audience that uses mobile phones to access internet. In fact, your website should be accessible and clearly visible in all forms of devices including tablets and smartphones. Our responsive web designing services will help you make your website adaptive enough for all devices. We provide customised responsive web design services with or without ongoing maintenance services to a wide range of industries. We also offer web hosting and domain registration services.</p>
                            <a href="#">Learn More our Web designing Services</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        
    </div>
 </section>



 <section class="py-5">
    <div class="Warper___header px-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 max____width__ col-md-12 col-xl-12 col-lg-12 col-xxl-12 mx-auto">
                    <div class="row">
                        <div class="col-12 col-md-7 Responsive______ col-xl-7 col-lg-7 mx-auto">
                            <h3>Search Engine Optimization</h3>
                            <p>Unfortunately, if your business is not easy to find on World Wide Web, most of your potential customers would never be able to find it. You will not be able to get enough sales and inquiries. No matter what quality of services or products you offer, you will not be considered seriously. The only solution to this problem is to make your business visible to most of your potential customers. Our ‘up-to-date’ search engine optimization services will help you achieve the visibility that your business deserves.</p>
                            <a href="#">Learn More about Search Engine Optimization</a>
                        </div>
                        <div class="col-12 col-md-5 Responsive______imgY col-xl-5 col-lg-5 mx-auto">
                            <img onclick = "toggle5()" src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/impplay-button-min-min.png" alt="" class="img-fluid" />
                            <div class="video___poopup5">
                                <div class="if__controler">
                                <iframe class="sixth__iframe" width="900" height="600" src="https://www.youtube.com/embed/4Qd4NMrFNmw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <img onclick = "toggle5()" src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/closebtn.png" alt="" class="img-fluid close____5" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        
    </div>
 </section>


 <section class="py-5">
    <div class="Warper___header px-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 max____width__ col-md-12 col-xl-12 col-lg-12 col-xxl-12 mx-auto">
                    <div class="row">
                        <div class="col-12 col-md-5 Responsive______imgZ col-xl-5 col-lg-5 mx-auto">
                            <img onclick = "toggle6()" src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/impplay-button-min-min.png" alt="" class="img-fluid" />
                            <div class="video___poopup6">
                                <div class="if__controler">
                                <iframe class="seventh___iframe" width="900" height="600" src="https://www.youtube.com/embed/b-2TaJjOv1M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <img onclick = "toggle6()" src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/closebtn.png" alt="" class="img-fluid close____6" />
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-7 Responsive______ col-xl-7 col-lg-7 mx-auto">
                            <h3>Pay Per Click Campaigns</h3>
                            <p>PPC is a proven way of increasing traffic to your website, but unless you get quality traffic, you won’t be able to get a better ROI. If you are looking for more quality leads that have a higher potential of being converted, you are at the right place. The team at Organizein is completely determined to focus more on increasing your return on investment and conversion rate instead of just bothering about the traffic numbers. If you have experienced poor PPC results in the past, it’s high time you must try us and experience the difference.</p>
                            <a href="#">Learn More about Pay Per Click Marketing</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        
    </div>
 </section>


 <section class="py-5">
    <div class="Warper___header px-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 max____width__ col-md-12 col-xl-12 col-lg-12 col-xxl-12 mx-auto">
                    <div class="row">
                        <div class="col-12 col-md-7 Responsive______ col-xl-7 col-lg-7 mx-auto">
                            <h3>Email Campaigns</h3>
                            <p>Our highly effective email marketing services can help you reach your target audience easily, create a positive impression, build your brand name, and increase your conversion rates. Email marketing is one of the cost-effective ways of marketing your business. This simple yet popular method of marketing can help you reach millions of potential as well as existing customers without making any significant investment. Our experts can build highly effective email campaigns with a fast turnaround time. Get in touch with us today!</p>
                            <a href="#">Learn More about Email Marketing</a>
                        </div>
                        <div class="col-12 col-md-5 Responsive______imgA col-xl-5 col-lg-5 mx-auto">
                            <img onclick = "toggle7()" src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/impplay-button-min-min.png" alt="" class="img-fluid" />
                            <div class="video___poopup7">
                                <div class="if__controler">
                                <iframe class="eight__iframe" width="900" height="600" src="https://www.youtube.com/embed/rDHqc9HxzUo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <img onclick = "toggle7()" src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/closebtn.png" alt="" class="img-fluid close____7" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
 </section>  -->

    <!---------------------- section ofLead Scoring services end ----------------------->










    <!----------------------------- section of better connections start ------------------------------>

    <section>
        <div class="container-fluid">
            <div class="row started___section">
                <div class="col-12 col-md-12 col-xl-12 col-lg-12 col-xxl-12 mx-auto">
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col-12 p-0 col-md-6  col-lg-6 col-xl-6 mx-auto">
                            <div class="Ready____img2">
                                <div class="text-center map____ py-5">
                                    <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/happy-min.png" alt="" class="img-fluid" />
                                    <h1>520+</h1>
                                    <p>Organizein Success Stories</p>
                                </div>
                                </p>
                            </div>
                        </div>
                        <div class="col-12 p-0 col-md-6 col-lg-6 d-flex justify-content-center align-items-center col-xl-6 mx-auto">
                            <div class="text____started2 ml-2">
                                <div class="row Count____customer">
                                    <div class="col-12 col-md-6 col-lg-6 single__customer col-xl-6 mx-auto">
                                        <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/Digital-marketing.png" alt="" class="img-fluid" />
                                        <h1>12K</h1>
                                        <p>Ads Campaigns</p>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-6 single__customer col-xl-6 mx-auto">
                                        <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/Backlinks.png" alt="" class="img-fluid" />
                                        <h1>2.5M</h1>
                                        <p>Backlinks Acquired</p>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-6 single__customer col-xl-6 mx-auto">
                                        <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/Digital-pr.png" alt="" class="img-fluid" />
                                        <h1>2M</h1>
                                        <p>Digital PR</p>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-6 single__customer col-xl-6 mx-auto">
                                        <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/pie-chart-min-min.png" alt="" class="img-fluid" />
                                        <h1>12M</h1>
                                        <p>Campaigns Run</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----------------------------- section of better connections end ------------------------------>





    <!------------------------- section of Ready to get started start ---------------------------->
    <section>
        <div class="container-fluid">
            <div class="row started___section">
                <div class="col-12 col-md-12 col-xl-12 col-lg-12 col-xxl-12 mx-auto">
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col-12 p-0 col-md-6  col-lg-6 col-xl-6 mx-auto">
                            <div class="Ready____img1">
                                <p class="Ready____img_Wrp"></p>
                            </div>
                        </div>
                        <div class="col-12 p-0 col-md-6 col-lg-6 d-flex justify-content-center align-items-center col-xl-6 mx-auto">
                            <div class="text____started">
                                <h3>Ready to get started?</h3>
                                <p>In today’s connected world, every customer attention matters. Organizein Digital
                                    Services helps you make the most of every Campaign, giving your business the
                                    exposure to attract customers from all digital channels.</p>
                                <a href="#" class="contactus_btn">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!------------------------- section of Ready to get started end ---------------------------->




    <!--------------------- section of Happy Customers start ------------------------------>
    <section class="Digital__Marketing__Services mt-5">
        <div class="Warper___header px-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 max____width__ col-12 Marketing______ col-lg-12 col-xl-12 mx-auto">
                        <h6 class="text-center pt-5 pb-3">A Few of Our Happy Customers.</h6>
                        <p>From Small to large companies, we're very proud to be able to help hundreds of thousands of
                            businesses grow every day.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <section class="mb-5 pb-5">
        <div class="Warper___header px-4">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-12 max____width__ col-md-12 col-xl-12 col-xxl-12 col-lg-12 mx-auto">
                        <div class="row gy-4">
                            <div class="col-12 mx-3 d-flex justify-content-center align-items-center text-center col-md-4 col-xl-4 mx-auto">
                                <div class="Happy__single__customar">
                                    <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/verifytx_logo_225x50.png" alt="" class="img-fluid" />
                                    <h3>
                                        Verify Treatment
                                    </h3>
                                    <p>
                                        VerifyTreatment is the leading provider of electronic verification of insurance
                                        benefits across the USA. It has access to 500+ insurance company databases and
                                        provides
                                    </p>

                                    <a href="https://www.organizein.com/verifytx-case-study/" target="blank">
                                        Read more <i class="fas fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 mx-3 d-flex justify-content-center align-items-center text-center col-md-4 col-xl-4 mx-auto">
                                <div class="Happy__single__customar">
                                    <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/Pet-Industry-1.png" alt="" class="img-fluid" />
                                    <h3>
                                        Pet Industry Expert
                                    </h3>
                                    <p>
                                        Phil Cooper is an expert with over 40 years of experience in the Pet Industry.
                                        He was a part-owner of an 80-year-old Pet distribution company.
                                    </p>

                                    <a href="https://www.organizein.com/petindustryexperts-case-study/" target="blank">
                                        Read more <i class="fas fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 mx-3 d-flex justify-content-center align-items-center text-center col-md-4 col-xl-4 mx-auto">
                                <div class="Happy__single__customar">
                                    <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/michael-johnson.png" alt="" class="img-fluid" />
                                    <h3>
                                        MJ Associates
                                    </h3>
                                    <p>
                                        MJA is engaged in the direct delivery of regulatory as well as R&D tax benefits
                                        to Australian companies from startups to the very largest.
                                    </p>

                                    <a href="https://www.organizein.com/mj-associates-case-study/" target="blank">
                                        Read more <i class="fas fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 mx-3 d-flex justify-content-center align-items-center text-center col-md-4 col-xl-4 mx-auto">
                                <div class="Happy__single__customar">
                                    <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/Smart-1.png" alt="" class="img-fluid" />
                                    <h3>
                                        Smart Tools
                                    </h3>
                                    <p>
                                        A Royd UK company that first started supplying SMART blades in 2010. They
                                        continue to focus on innovating
                                    </p>

                                    <a href="https://www.organizein.com/smart-tool-group-case-study/" target="blank">
                                        Read more <i class="fas fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 mx-3 d-flex justify-content-center align-items-center text-center col-md-4 col-xl-4 mx-auto">
                                <div class="Happy__single__customar">
                                    <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/1582822837895-12.png" alt="" class="img-fluid" />
                                    <h3>
                                        Powerd by Innovation
                                    </h3>
                                    <p>
                                        Powered By Innovation (PBI) is a group of experienced business consultants with
                                        a global delivery model to assist clients in transforming their business
                                        operations
                                    </p>

                                    <a href="https://www.organizein.com/powerd-by-innovation-case-study/" target="blank">
                                        Read more <i class="fas fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 mx-3 d-flex justify-content-center align-items-center text-center col-md-4 col-xl-4 mx-auto">
                                <div class="Happy__single__customar">
                                    <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/screenshot_2016_03_11_00.47_1458024802__37248.original.jpg" alt="" class="img-fluid" />
                                    <h3>
                                        O2Fit
                                    </h3>
                                    <p>
                                        O2fit is a 100% Australian company based in Perth and Western Australia They
                                        manufacture compression clothing. The main aim of O2fit was to reduce the
                                        expensive price of compression
                                    </p>

                                    <a href="https://www.organizein.com/o2fit-case-study/" target="blank">
                                        Read more <i class="fas fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="text-center pt-5 btn____ViewAllCase">
                        <a href="#">VIEW ALL CASE STUDIES</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--------------------- section of Happy Customers end ------------------------------>

    <!--#1 Digital Marketing Service Provider-->
    <div class="marketing_Banner">
        <div class="marketing_banner_inner">

            <h1>#1 Digital Marketing Service Provider</h1>
            <div class="owl-carousel owl-theme owl-carousel2">
                <div class="item item_inner">
                    <p>‘’The functionalities of our apps MVP fit in seamlessly with the desire to improve our online
                        performance and marketing communication.’’
                    </p>
                    <a href="#">Martin van Berkel, Communication Manager at De Nevobo</a>
                </div>
                <div class="item item_inner">
                    <p>“Organizein understood our issue, understood that we already had a CRM in place and that we
                        needed a bolt-on, and were prepared to look at our bespoke requirements and work with us to
                        deliver them. That was unique.”
                    </p>
                    <a href="#">Colin Peters, Director at Radius Payment Solutions</a>
                </div>
                <div class="item item_inner">
                    <p>“Organizein.com proposed to change the look and feel of the Home page to match Foodbag’s look and
                        feel. To us, Organizein is more than just a Digital service provider; they are an IT partner in
                        the entire customer journey.”
                    </p>
                    <a href="#">Stéphane Ronse, Founder of Foodbag</a>
                </div>
                <div class="item item_inner">
                    <p>“After the onboarding phase, the Inbound Marketing team continues to come up with new ideas, and
                        they will email us to see if any issues have arisen. The team is always, always on hand to
                        ensure that we’ve got everything we need.”
                    </p>
                    <a href="#">Katie Hucks, Customer Service Manager at Revolution Beauty</a>
                </div>
            </div>
        </div>
    </div>

    <div class="banner3">
        <h1>Why Customers Choose Organizein</h1>
        <div class="banner_cards">
            <div class="banner_card">
                <img src="https://www.organizein.com/wp-content/uploads/2021/10/Artboard-4-1-1.png" alt="">
                <p>More than 12 years of experience</p>
            </div>
            <div class="banner_card">
                <img src="https://www.organizein.com/wp-content/uploads/2021/10/cloud2.png" alt="">
                <p>Global team</p>
            </div>
            <div class="banner_card">
                <img src="https://www.organizein.com/wp-content/uploads/2021/10/Artboard-1-1.png" alt="">
                <p>Customers across 118 countries</p>
            </div>
            <div class="banner_card">
                <img src="https://www.organizein.com/wp-content/uploads/2021/10/cloud4-1.png" alt="">
                <p>Google Certified</p>
            </div>
            <div class="banner_card">
                <img src="https://www.organizein.com/wp-content/uploads/2021/04/cloud5.png" alt="">
                <p>Global monitoring & support</p>
            </div>
            <div class="banner_card">
                <img src="https://www.organizein.com/wp-content/uploads/2021/10/cloud6-1.png" alt="">
                <p>Listed & Global team</p>
            </div>
        </div>
    </div>







    <!---------------------------- sectio of admin start  ------------------------------>
    <section>
        <div class="Warper___header px-4">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-12 max____width__ col-md-12 col-lg-12 col-xl-12 col-xxl-12 mx-auto">
                        <div class="row gy-4">
                            <div class="col-12 col-md-4 col-lg-4 col-xl-4 mx-auto">
                                <div class="Wraper__admit__id">
                                    <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/young-happy-smiling-woman-casual-clothes-holding-laptop-sending-email-her-best-friend-isolated-gray-backgroundv1.png" alt="" class="img-fluid" />
                                    <p class="header___admin">
                                        Proven Performance
                                    </p>
                                    <p>
                                        Our 300 member strong team is one of the leading digital marketing agencies in
                                        the world. We’ve partnered with the best in the cyberworld including Google,
                                        Facebook, Bing and many more to bring the latest and greatest in digital
                                        marketing technology to our clients.
                                    </p>
                                    <a href="#">Get in touch</a>
                                </div>
                            </div>

                            <div class="col-12 col-md-4 col-lg-4 col-xl-4 mx-auto">
                                <div class="Wraper__admit__id">
                                    <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/transparent-Roi-v1.png" alt="" class="img-fluid" />
                                    <p class="header___admin">
                                        Transparent ROI
                                    </p>
                                    <p>
                                        You will no longer need to wade through cumbersome spreadsheets to evaluate your
                                        campaign’s performance. All our clients can access Organizein’s KPI Dashboard,
                                        our best-in-class marketing software platform that keeps track of even the
                                        minute details of each campaign.
                                    </p>
                                    <a href="#">Get in touch</a>
                                </div>
                            </div>


                            <div class="col-12 col-md-4 col-lg-4 col-xl-4 mx-auto">
                                <div class="Wraper__admit__id">
                                    <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/smiling-businesswoman-typing-laptop-sitting-cafev1.png" alt="" class="img-fluid" />
                                    <p class="header___admin">
                                        Driving Traffic
                                    </p>
                                    <p>
                                        A website that doesn’t attract visitors is worthless, but a website that
                                        attracts the right audience with consistent flow of traffic can propel a
                                        business to greater heights. Our marketers work with you to identify your target
                                        audience and work on making your site more visible and addictive with our
                                        comprehensive digital marketing services.
                                    </p>
                                    <a href="#">Get in touch</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---------------------------- sectio of admin end  ------------------------------>





    <!-------------------------------- Partner-ship bisness start  --------------------------->
    <section>
        <div class="Warper___header px-4">
            <div class="container-fluid pb-5">
                <h1 class="text-center my-5 PartnerShip__header">One Partner for Small, Mid-Sized, and Enterprise
                    Businesses</h1>
                <div class="row">
                    <div class="col-12 max____width__ col-md-12 col-lg-12 col-xl-12 col-xxl-12 mx-auto">
                        <div class="row gy-5">
                            <div class="col-md-4 col-12  PartnerShip____img col-lg-4 col-xl-4 col-xxl-4 mx-auto">
                                <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/top-search-engines-oct-2020-copy.png" alt="" class="img-fluid" />
                            </div>
                            <div class="col-md-8 PartnerShip____details col-12 col-lg-8 col-xl-8 col-xxl-8 mx-auto">
                                <h4>Digital Marketing Solutions</h4>
                                <p>No matter the industry or type of business you are in, we have the perfect solution
                                    for you. We help you set clear goals, and achieve them! All based on data and
                                    analytics.</p>
                                <a href="https://organizein.com/google-search-ads/">Find Out More <i class="fas fa-chevron-right"></i></a>
                            </div>



                            <div class="col-md-4 col-12  PartnerShip____img col-lg-4 col-xl-4 col-xxl-4 mx-auto">
                                <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/29.png" alt="" class="img-fluid" />
                            </div>
                            <div class="col-md-8 PartnerShip____details col-12 col-lg-8 col-xl-8 col-xxl-8 mx-auto">
                                <h4>Web & Mobile App Solutions</h4>
                                <p>Our expert team – made up of elite designers, developers and marketers take on each
                                    project and client with a driving passion. That dedication has resulted in some of
                                    the best work on the web. Don’t take our word for it!</p>
                                <a href="https://www.organizein.com/php-web-development">Find Out More <i class="fas fa-chevron-right"></i></a>
                            </div>



                            <div class="col-md-4 col-12  PartnerShip____img col-lg-4 col-xl-4 col-xxl-4 mx-auto">
                                <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/28.png" alt="" class="img-fluid" />
                            </div>
                            <div class="col-md-8 PartnerShip____details col-12 col-lg-8 col-xl-8 col-xxl-8 mx-auto">
                                <h4>Custom Digital Marketing Dashboard Integrations</h4>
                                <p>Our clients exceed their goals, thanks to our winning combo — experienced digital
                                    marketers and the insightful platform – Organizein KPI Dashboard. We have engineered
                                    a customized software platform designed to help clients make smarter decisions using
                                    our in-house marketing KPI tools.</p>
                                <a href="https://organizein.com/google-search-ads/">Find Out More <i class="fas fa-chevron-right"></i></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-------------------------------- Partner-ship bisness end  --------------------------->





    <!------------------------- section of Success__Digital start  +--------------------->
    <section class="mt-5 success___Digital">
        <div class="Warper___header px-4">
            <div class="container-fluid">
                <div class="row pt-5">
                    <div class="col-12 max____width__ col-md-12 col-xl-12 col-lg-12 col-xxl-12 mx-auto">
                        <div class="row">
                            <div class="col-12 col-md-6 d-flex justify-content-center align-items-center success____Digital____ col-xl-6 col-lg-6 mx-auto">
                                <div>
                                    <h1>
                                        <b>Ready for Success in the new Digital Age?</b>
                                    </h1>
                                    <p>
                                        With Organizein, Get Ready for a 360^ Brand Identity and Accelerated Business
                                        Growth
                                        Data-Driven and Flawlessly Executed Campaigns with High ROI.
                                        Ready to grow your business? Feel Free to Contact Us.
                                    </p>
                                    <a href="#" class="contactus_btn">Contact us</a>
                                    <a class="Edition____btn" href="#">Editions & Pricing</a>
                                </div>

                            </div>
                            <div class="col-12 col-md-6 col-xl-6 col-lg-6 mx-auto">
                                <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/erewr.png" alt="" class="img-fluid" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!------------------------- section of Success__Digital end  +--------------------->






    <!-------------------------------- Comment box section start  --------------------->
    <section class="comment___box___Wraper" id="contactUsForm">
        <div class="Warper___header px-4">
            <div class="container-fluid">
                <form action="<?= $actual_link ?>/multipageadmin/auth/inquiry_handler.php" method="post" id="form3">
                    <input type="hidden" name="contact_form" value="form-3" />
                    <input type="hidden" name="current_url" value="<?= $current_url ?>">
                    <div class="row">
                        <div class="col-12 max____width__ col-md-12 col-lg-12 col-xl-12 col-xxl-12 mx-auto">
                            <div class="row">
                                <div class="col-12 col-md-6  col-xl-6 comment____area___from col-lg-6 mx-auto">

                                    <h3>We’ve driven over <span class="footer_title_outlin">6,271,747</span> leads for
                                        clients. Discover how we can help your business grow</h3>
                                    <div class="row">

                                        <div class="col-md-6 col-12 Fname___email col-lg-6 col-xl-6 mx-auto">
                                            <h5>Full Name</h5>
                                            <input type="text" placeholder="Full Name" name="name" required />
                                            <h5>Email</h5>
                                            <input type="email" placeholder="your@gmail.com" name="email" required />
                                        </div>
                                        <div class="col-md-6 Fname___email col-12 col-lg-6 col-xl-6 mx-auto">
                                            <h5>Company</h5>
                                            <input type="text" placeholder="Company Name" name="company" required />
                                            <h5>Phone</h5>
                                            <input type="number" placeholder="(555) 555-5555" name="phone" required />
                                        </div>
                                    </div>

                                    <h5>Interested services</h5>
                                    <select name="services_interested" id="Interested services" required>
                                        <option value="">Please Select...</option>
                                        <option value="Web Design and Development">Web Design and Development</option>
                                        <option value="Digital Marketing">Digital Marketing</option>
                                        <option value="SEO">SEO</option>
                                        <option value="SEM">SEM</option>
                                        <option value="Social Media">Social Media</option>
                                        <option value="Email Marketing">Email Marketing</option>
                                        <option value="Inbound Marketing">Inbound Marketing</option>
                                        <option value="Content Development">Content Development</option>
                                        <option value="Cloned Application">Cloned Application</option>
                                        <option value="Mobile Apps">Mobile Apps</option>
                                        <option value="Web Maintenance">Web Maintenance</option>
                                        <option value="Custom">Custom</option>
                                    </select>


                                    <h5>What is your projected monthly budget for this project?</h5>
                                    <select name="budget" id="budget" required>
                                        <option value="">Please Select...</option>
                                        <option value="Unknown">Unknown</option>
                                        <option value="$30 - $750/mo.">$30 - $750/mo.</option>
                                        <option value="$750 - $1,500/mo.">$750 - $1,500/mo.</option>
                                        <option value="$1,500 - $3,500/mo.">$1,500 - $3,500/mo.</option>
                                        <option value="$3,500 - $10,000/mo.">$3,500 - 10,000/mo.</option>
                                        <option value="$10,000+/mo.">="$10,000+/mo.</option>
                                    </select>

                                    <h5>How can we help your business?</h5>
                                    <textarea placeholder="Tell us more..." name="message" id="" cols="71.9" rows="3" required></textarea>
                                    <!-- <div class="g-recaptcha" data-sitekey="6Lc1uigeAAAAADXQ0y8j1Qt6x1UznrzyoIiG279B">
                                    </div> -->
                                    <button type="submit">Hear from an expert</button>
                                </div>

                                <div class="col-12 col-md-6 col-xl-6 col-lg-6 mx-auto">
                                    <div class="Organizein_____">
                                        <h3 class="mt-2">Hear from over 500 <span>Organizein</span> clients</h3>
                                        <div class="Wraper___Orga___">
                                            <div class="Organizen____box_____Wraper mb-5">
                                                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <div class="Organizen____box">
                                                                <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/icon1.png" alt="" class="img-fluid" />
                                                                <p>
                                                                    Organizein has been excellent to work with! Very
                                                                    knowledgeable about the ever changing algorithms
                                                                    that
                                                                    make up SEO!
                                                                    <br />
                                                                    <br />
                                                                    <span>Marketing Director </span>
                                                                <p class="Arizona____">ALARM SYSTEM PROVIDER IN MA</p>
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="carousel-item">
                                                            <div class="Organizen____box">
                                                                <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/icon1.png" alt="" class="img-fluid" />
                                                                <p>
                                                                    Organizein did everything they said they would do
                                                                    and
                                                                    did it on time! The whole process was very easy!
                                                                    <br />
                                                                    <br />
                                                                    <span>Owner</span>
                                                                <p class="Arizona____">ARIZONA GARAGE DOOR SUPPLIER</p>
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="carousel-item">
                                                            <div class="Organizen____box">
                                                                <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/icon1.png" alt="" class="img-fluid" />
                                                                <p>
                                                                    Organizein has been a pleasure to work with on our
                                                                    SEO
                                                                    needs and I look forward to working with them on
                                                                    future
                                                                    projecs,
                                                                    <br />
                                                                    <br />
                                                                    <span>Operations Manager</span>
                                                                <p class="Arizona____">METAL STAMPING SERVICE</p>
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="carousel-item">
                                                            <div class="Organizen____box">
                                                                <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/icon1.png" alt="" class="img-fluid" />
                                                                <p>
                                                                    Organizein did everything they said they would do
                                                                    and
                                                                    did it on time! The whole process was very easy!
                                                                    <br />
                                                                    <br />
                                                                    <span>Owner</span>
                                                                <p class="Arizona____">ARIZONA GARAGE DOOR SUPPLIER</p>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <a class="Clinet____testimonials" href="#">VIEW 500+ CLIENT TESTIMONIALS</a>

                                        <div class="Claient____CompanyLogo my-5">
                                            <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/award-footer.png" alt="" class="img-fluid" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-------------------------------- Comment box section end  --------------------->




    <!---------------------- speak marketing section start  ---------------------->
    <section class="speak____marketing__Wraper mb-2">
        <div class="Warper___header px-4">
            <div class="container-fluid Contact__wraper__bg">
                <div class="row">
                    <div class="col-md-12 max____width__ col-12 col-xl-12 col-lg-12 col-xxl-12 mx-auto">
                        <div class="row justify-content-between align-items-center text-center">
                            <div class="col-12 left___speck___ d-flex justify-content-center align-items-center text-start col-md-7 col-lg-7 col-xl-7 col-xxl-7 mx-auto">
                                <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/1675426.png" alt="" class="img-fluid" width="100px" />
                                <div class="company_details">
                                    <h5>Ready to speak with a marketing expert? Give us a ring</h5>
                                    <!-- <h2>+1 646 679-7250</h2> -->
                                    <h2>hi@organizein.com</h2>
                                </div>
                            </div>

                            <div class="col-12 col-md-5 justify-content-center align-items-center text-center col-lg-5 col-xl-5 col-xxl-5 mx-auto">
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center align-items-center text-center col-md-4 col-lg-4 col-xl-4 col-xxl-4 mx-auto">
                                        <div class="Single___Client__contact">
                                            <h3>1.6M</h3>
                                            <p>Hours of Expertise</p>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 d-flex justify-content-center align-items-center text-center  mx-auto">
                                        <div class="Single___Client__contact">
                                            <h3>300+</h3>
                                            <p>Digital Marketing Masters On Staff</p>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-4 col-lg-4 col-xl-4 d-flex justify-content-center align-items-center text-center  col-xxl-4 mx-auto">
                                        <div class="Single___Client__contact">
                                            <h3>1,128</h3>
                                            <p>Websites Launched</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---------------------- speak marketing section end  ---------------------->




    <div class="banner3 mb-3">
        <h1 style="margin-bottom: 40px;">Latest News!</h1>
        <rssapp-carousel id="6NZLhyLrgpz98bNI"></rssapp-carousel>
        <script src="https://widget.rss.app/v1/carousel.js" type="text/javascript" async></script>
    </div>



    <!--------------------------- after footer section start  ------------------------------->
    <section class="my-3 pb-5">
        <div class="Warper___header px-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 max____width__ col-md-12 col-xl-12 col-xxl-12 col-lg-12 mx-auto">
                        <div class="row">
                            <div class="col-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 mx-auto">
                                <div class="Left__site__footer">
                                    <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/organizein-logo-main-1.png" alt="" class="img-fluid" />
                                    <ul>
                                        <li><a href="https://www.facebook.com/organizeindm/ "> <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/facebook.png" alt="" class="img-fluid" /></a></li>
                                        <li><a href="https://twitter.com/Organizein/"> <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/twitter-sign.png" alt="" class="img-fluid" /></a></li>
                                        <li><a href="https://www.linkedin.com/company/3273657/"> <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/linkedin-logo.png" alt="" class="img-fluid" /></a></li>
                                        <li><a href="https://www.youtube.com/channel/UCAuvWg57vxGiRcyRV9p3Avw/videos"> <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/youtube.png" alt="" class="img-fluid" /></a></li>
                                        <li><a href="https://www.instagram.com/organizein_/"> <img src="<?= $actual_link ?>/multipageadmin/partnerwebsiteresources/images/instagram.png" alt="" class="img-fluid""/></a></li>
                                    </ul>
                                    <!-- <h4>Call us at +1 646 679-7250</h4> -->
                                    <h4>Email us at hi@organizein.com</h4>
                                    <h4>SEE ALL WAYS TO CONTACT US </h4>
                                </div>
                            </div>
                            <div class="col-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3 mx-auto">
                                <div class="Secound____site__footer">
                                    <h5>Digital Marketing</h5>
                                    <ul>
                                        <li><a href="#">Search Engine Optimisation</a></li>
                                        <li><a href="#">Search Engine Marketing</a></li>
                                        <li><a href="#">Social Media Marketing</a></li>
                                        <li><a href="#">Email Marketing</a></li>
                                        <li><a href="#">Influencer Marketing</a></li>
                                        <li><a href="#">Managed digital Marketing</a></li>
                                        <li><a href="#">Content Development</a></li>
                                        <li><a href="#">Inbound Marketing</a></li>
                                        <li><a href="#">Sms Marketing</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3 mx-auto">
                                <div class="Secound____site__footer">
                                    <h5>IT Development Services</h5>
                                    <ul>
                                        <li><a href="#">Web Design</a></li>
                                        <li><a href="#">Web Development</a></li>
                                        <li><a href="#">iOS App Development</a></li>
                                        <li><a href="#">Android App Development</a></li>
                                        <li><a href="#">MPV Prototypes</a></li>
                                        <li><a href="#">eCommerce Store</a></li>
                                        <li><a href="#">Hosting & Server Management</a></li>
                                        <li><a href="#">WordPress Development</a></li>
                                        <li><a href="#">Website Localisation</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-2 col-lg-2 col-xl-2 col-xxl-2 mx-auto">
                                <div class="Secound____site__footer">
                                    <h5>Popular Links</h5>
                                    <ul>
                                        <li><a href="#">Case Studies</a></li>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Career</a></li>
                                        <li><a href="#">Pricing</a></li>
                                        <li><a href="#">Industry</a></li>
                                        <li><a href="#">Support</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#" class="contactus_btn">Contact Us</a></li>
                                        <li><a href="#">Get a Free Report</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--------------------------- after footer section end ------------------------------->






    <!-------------------------- footer section start  -------------------->
    <footer class="mt-5">
        <div class="Warper___header px-4">
            <div class="container-fluid">

                <div class="fotterColumn">
                    <div class="fotterColumn1">
                        <h3>SEO</h3>
                        <div class="fotter_links">
                            <div class="mega_menu_coloum">
                                <div class="column_heading">DRIVE MORE LEADS</div>
                                <div class="column_items">
                                    <a class="item_data" href="https://www.organizein.com/seo-services/"><?php echo $city ?> SEO
                                        Services</a>
                                    <a class="item_data" href="https://www.organizein.com/e-commerce-seo/"><?php echo $city ?> eCommerce
                                        SEO</a>
                                    <a class="item_data" href="https://www.organizein.com/local-seo/"><?php echo $city ?> Local
                                        SEO</a>
                                    <a class="item_data" href="https://www.organizein.com/link-building-services-seo/"><?php echo $city ?> Link
                                        Building Services</a>
                                    <a class="item_data" href="https://www.organizein.com/link-penalty-removal/"><?php echo $city ?> Link
                                        Penalty Removal</a>
                                    <a class="item_data" href="https://www.organizein.com/seo-audits/"><?php echo $city ?> SEO
                                        Audits</a>
                                    <a class="item_data" href="https://www.organizein.com/negative-seo-monitoring/"><?php echo $city ?> Negative
                                        SEO Monitoring</a>
                                    <a class="item_data" href="https://www.organizein.com/seo-competitor-intelligence/"><?php echo $city ?> SEO
                                        Competitor Intelligence</a>
                                    <a class="item_data" href="https://www.organizein.com/video-seo/"><?php echo $city ?> Video
                                        SEO</a>
                                    <a class="item_data" href="https://www.organizein.com/pnb-guest-blog-outreach/"><?php echo $city ?> PNB
                                        -Guest Blog</a>
                                    <a class="item_data" href="https://www.organizein.com/gov-edu-link-building/"><?php echo $city ?> Gov
                                        &amp; Edu link Building</a>
                                    <a class="item_data" href="https://www.organizein.com/website-seo-copywriting/"><?php echo $city ?> Website
                                        SEO Copywriting</a>
                                    <a class="item_data" href="https://www.organizein.com/voice-search-content-optimization/"><?php echo $city ?> Voice
                                        Search Content Optimization</a>
                                    <a class="item_data" href="https://www.organizein.com/seo-friendly-site-architecture/"><?php echo $city ?> SEO
                                        Friendly Site Architecture</a>
                                    <a class="item_data" href="https://www.organizein.com/seo-strategy-advice/"><?php echo $city ?> SEO
                                        Strategy Advice</a>
                                    <a class="item_data" href="https://www.organizein.com/top-keywords-advice/"><?php echo $city ?> Top
                                        Keywords Advice</a>
                                    <a class="item_data" href="https://www.organizein.com/digital-pr/"><?php echo $city ?> Digital
                                        PR</a>
                                </div>
                            </div>
                            <div class="mega_menu_coloum">
                                <div class="column_heading">Increase Your Reach</div>
                                <div class="column_items">
                                    <a class="item_data" href="https://www.organizein.com/amazon-seo-product-optimization/"><?php echo $city ?> Amazon
                                        SEO &amp; Product Optimization</a><a class="item_data" href="https://www.organizein.com/mobile-apps-seo/"><?php echo $city ?> Mobile
                                        Apps SEO</a><a class="item_data" href="https://www.organizein.com/optimize-social-media/"><?php echo $city ?> Optimize
                                        Social Media</a><a class="item_data" href="https://www.organizein.com/hubsot-seo/"><?php echo $city ?> HubSpot
                                        SEO</a><a class="item_data" href="https://www.organizein.com/wix-seo/"><?php echo $city ?> Wix
                                        SEO</a><a class="item_data" href="https://www.organizein.com/shopify-seo/"><?php echo $city ?> Shopify
                                        SEO</a><a class="item_data" href="https://www.organizein.com/wordpress-seo/"><?php echo $city ?> Wordpress
                                        SEO</a><a class="item_data" href="https://www.organizein.com/volusion-seo/"><?php echo $city ?> Volusion
                                        SEO</a><a class="item_data" href="https://www.organizein.com/magento-seo/"><?php echo $city ?> Magento
                                        SEO</a><a class="item_data" href="https://www.organizein.com/squarespace-seo/"><?php echo $city ?> Squarespace
                                        SEO</a><a class="item_data" href="https://www.organizein.com/woocommerce-seo/"><?php echo $city ?> WooCommerce
                                        SEO</a><a class="item_data" href="https://www.organizein.com/bigcommerce-seo/"><?php echo $city ?> BigCommerce
                                        SEO</a><a class="item_data" href="https://www.organizein.com/weebly-seo/"><?php echo $city ?> Weebly
                                        SEO</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fotterColumn1">
                        <h3>SEM</h3>
                        <div class="fotter_links">
                            <div class="mega_menu_coloum">
                                <div class="column_heading">Search Engine</div>
                                <div class="column_items">
                                    <a class="item_data" href="https://www.organizein.com/google-search-ads/"><?php echo $city ?> Google
                                        Search Ads</a>
                                    <a class="item_data" href="https://www.organizein.com/google-display-ads/"><?php echo $city ?> Google
                                        Display Ads</a>
                                    <a class="item_data" href="https://www.organizein.com/google-remarketing-ads/"><?php echo $city ?> Google
                                        Remarketing Ads</a>
                                    <a class="item_data" href="https://www.organizein.com/google-mobile-ads/"><?php echo $city ?> Google
                                        Mobile Ads</a>
                                    <a class="item_data" href="https://www.organizein.com/google-shopping-ads/"><?php echo $city ?> Google
                                        Shopping Ads</a>
                                    <a class="item_data" href="https://www.organizein.com/google-video-ads/"><?php echo $city ?> Google
                                        Video Ads</a>
                                    <a class="item_data" href="https://www.organizein.com/microsoft-ads/"><?php echo $city ?> Microsoft
                                        Ads</a>
                                    <a class="item_data" href="https://www.organizein.com/yahoo-ads/"><?php echo $city ?> Yahoo
                                        Ads</a>
                                    <a class="item_data" href="https://www.organizein.com/amazon-ads/"><?php echo $city ?> Amazon
                                        Ads</a>
                                    <a class="item_data" href="https://www.organizein.com/spotify-ads/"><?php echo $city ?> Spotify
                                        Ads</a>
                                </div>
                            </div>
                            <div class="mega_menu_coloum">
                                <div class="column_heading">Social Network</div>
                                <div class="column_items">
                                    <a class="item_data" href="https://www.organizein.com/facebook-ads/"><?php echo $city ?> Facebook
                                        Ads</a>
                                    <a class="item_data" href="https://www.organizein.com/instagram-ads/"><?php echo $city ?> Instagram
                                        Ads</a>
                                    <a class="item_data" href="https://www.organizein.com/twitter-ads/"><?php echo $city ?> Twitter
                                        Ads</a>
                                    <a class="item_data" href="https://www.organizein.com/linkedin-ads/"><?php echo $city ?> LinkedIn
                                        Ads</a>
                                    <a class="item_data" href="https://www.organizein.com/youtube-ads/"><?php echo $city ?> Youtube
                                        Ads</a>
                                    <a class="item_data" href="https://www.organizein.com/snapchat-ads/"><?php echo $city ?> Snapchat
                                        Ads</a>
                                    <a class="item_data" href="https://www.organizein.com/taboola/"><?php echo $city ?> Taboola</a>

                                    <a class="item_data" href="https://www.organizein.com/pinterest-ads/"><?php echo $city ?> Pinterest
                                        Ads</a>
                                </div>

                            </div>
                            <div class="mega_menu_coloum">
                                <div class="column_heading">Mobile Network</div>
                                <div class="column_items">
                                    <a class="item_data" href="https://www.organizein.com/admob/"><?php echo $city ?> AdMob</a>
                                    <a class="item_data" href="https://www.organizein.com/adcolony/"><?php echo $city ?> AdColony</a>

                                    <a class="item_data" href="https://www.organizein.com/tubemogul/"><?php echo $city ?> TubeMogul</a>

                                    <a class="item_data" href="https://www.organizein.com/airpush/"><?php echo $city ?> Airpush</a>

                                    <a class="item_data" href="https://www.organizein.com/one-by-aol/"><?php echo $city ?> ONE by
                                        AOL</a>
                                    <a class="item_data" href="https://www.organizein.com/inmobi/"><?php echo $city ?> Inmobi</a>

                                    <a class="item_data" href="https://www.organizein.com/leadbolt/"><?php echo $city ?> LeadBolt</a>

                                    <a class="item_data" href="https://www.organizein.com/ad-recover/"><?php echo $city ?> Ad
                                        Recover</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fotterColumn1">
                        <h3>Digital Marketing</h3>
                        <div class="fotter_links">
                            <div class="mega_menu_coloum">
                                <div class="column_heading">ATTRACT PROSPECTS</div>
                                <div class="column_items">
                                    <a class="item_data" href="https://www.organizein.com/seo/"><?php echo $city ?> Search Engine
                                        Optimization</a>
                                    <a class="item_data" href="https://www.organizein.com/search-engine-marketing-seo/"><?php echo $city ?> Search
                                        Engine Marketing</a>
                                    <a class="item_data" href="https://www.organizein.com/mobile-advertising/"><?php echo $city ?> Mobile
                                        Advertising</a>
                                    <a class="item_data" href="https://www.organizein.com/influencer-marketing/"><?php echo $city ?> Influencer
                                        Marketing</a>
                                    <a class="item_data" href="https://www.organizein.com/branding-design/"><?php echo $city ?> Branding
                                        &amp; Design</a>
                                    <a class="item_data" href="https://www.organizein.com/managed-digital-service-360/"><?php echo $city ?> Managed
                                        Digital Service 360</a>
                                    <a class="item_data" href="https://www.organizein.com/social-media-marketing-seo/"><?php echo $city ?> Social
                                        Media Marketing</a>
                                    <a class="item_data" href="https://www.organizein.com/re-marketing-ads/"><?php echo $city ?> Re-Marketing
                                        Ads</a>
                                    <a class="item_data" href="https://www.organizein.com/content-development-seo/"><?php echo $city ?> Content
                                        Development</a>
                                </div>
                            </div>
                            <!-- <div class="mega_menu_coloum">
                                <div class="column_heading">BUID ENGAGEMENT</div>
                                <div class="column_items">
                                    <a class="item_data"
                                        href="https://www.organizein.com/social-media-marketing-seo/">Social
                                        Media Marketing</a>
                                    <a class="item_data"
                                        href="https://www.organizein.com/re-marketing-ads/">Re-Marketing
                                        Ads</a>
                                    <a class="item_data"
                                        href="https://www.organizein.com/content-development-seo/">Content
                                        Development</a>
                                </div>
                            </div> -->
                            <div class="mega_menu_coloum">
                                <div class="column_heading">TURN OPPORTUNITIES INTO CLIENTS</div>
                                <div class="column_items">
                                    <a class="item_data" href="https://www.organizein.com/sms-marketing/"><?php echo $city ?> SMS
                                        Marketing</a>
                                    <a class="item_data" href="https://www.organizein.com/email-marketing-seo/"><?php echo $city ?> Email
                                        Marketing</a>
                                    <a class="item_data" href="https://www.organizein.com/crm-integrations-analytics/"><?php echo $city ?> CRM
                                        Integrations &amp; Analytics</a>
                                </div>
                            </div>
                            <div class="mega_menu_coloum">
                                <div class="column_heading">Accelerate Your Revenue</div>
                                <div class="column_items">
                                    <a class="item_data" href="https://www.organizein.com/enterprise-seo/"><?php echo $city ?> Enterprise
                                        SEO</a><a class="item_data" href="https://www.organizein.com/franchse-seo/"><?php echo $city ?> Franchise
                                        SEO</a><a class="item_data" href="https://www.organizein.com/hire-dedicated-seo-team/"><?php echo $city ?> Hire
                                        Dedicated SEO Team</a><a class="item_data" href="https://www.organizein.com/white-label-seo/"><?php echo $city ?> White-label
                                        SEO</a><a class="item_data" href="https://www.organizein.com/seo-project-management/"><?php echo $city ?> SEO
                                        Project Management</a><a class="item_data" href="https://www.organizein.com/managed-seo-service/"><?php echo $city ?> Managed
                                        SEO Service</a><a class="item_data" href="https://www.organizein.com/web-consule-management/"><?php echo $city ?> Web
                                        console Management</a><a class="item_data" href="https://www.organizein.com/custom-seo-dashboard-reporting/"><?php echo $city ?> Custom
                                        SEO Dashboard &amp; Reporting</a><a class="item_data" href="https://www.organizein.com/smb-solution/"><?php echo $city ?> SMB
                                        Solution</a><a class="item_data" href="https://www.organizein.com/multigual-seo/"><?php echo $city ?> Multilingual
                                        SEO</a><a class="item_data" href="https://www.organizein.com/seo-web-speed-optimization/"><?php echo $city ?> SEO
                                        Web Speed Optimization</a><a class="item_data" href="https://www.organizein.com/seo-safe-cdn-integration/"><?php echo $city ?> SEO
                                        Safe CDN Integration</a><a class="item_data" href="https://www.organizein.com/improve-score-in-gtmetrix/"><?php echo $city ?> Improve
                                        Score in GTMetrix</a><a class="item_data" href="https://www.organizein.com/improve-core-web-vitals/"><?php echo $city ?> Improve
                                        Core Web Vitals</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fotterColumn1">
                        <h3>Development</h3>
                        <div class="fotter_links ">
                            <div class="mega_menu_coloum">
                                <div class="column_heading">WEB DEVELOPMENT</div>
                                <div class="column_items">
                                    <a class="item_data" href="https://www.organizein.com/ecommerce-store/"><?php echo $city ?> eCommerce
                                        Store</a>
                                    <a class="item_data" href="https://www.organizein.com/php-web-development/"><?php echo $city ?> PHP
                                        Web Development</a>

                                    <a class="item_data" href="https://www.organizein.com/wordpress-development/"><?php echo $city ?> WordPress
                                        Development</a>
                                    <a class="item_data" href="https://www.organizein.com/chatbot-apps/"><?php echo $city ?> Chatbot
                                        Apps</a></li736>
                                    <a class="item_data" href="https://www.organizein.com/website-localization/"><?php echo $city ?> Website
                                        Localization</a>

                                </div>
                            </div>
                            <div class="mega_menu_coloum">
                                <div class="column_heading">MOBILE APPLICATION</div>
                                <div class="column_items">
                                    <a class="item_data" href="https://www.organizein.com/android-app-development/"><?php echo $city ?> Android
                                        App
                                        development</a>
                                    <a class="item_data" href="https://www.organizein.com/ios-app-development/"><?php echo $city ?> iOS
                                        App Development</a>
                                    <a class="item_data" href="https://www.organizein.com/hybrid-apps/"><?php echo $city ?> Hybrid
                                        Apps</a>
                                    <a class="item_data" href="#">MVP Prototypes</a>
                                </div>
                            </div>
                            <div class="mega_menu_coloum">
                                <div class="column_heading">DOMAIN &amp; SERVER MANAGEMENT</div>
                                <div class="column_items">
                                    <a class="item_data" href="https://www.organizein.com/dedicated-server-management/"><?php echo $city ?> Dedicated
                                        Server
                                        Management</a>
                                    <a class="item_data" href="https://www.organizein.com/vps-shared-server-management/"><?php echo $city ?> VPS
                                        &amp; Shared
                                        Server Management</a>
                                    <a class="item_data" href="https://www.organizein.com/ssl-certification-management/"><?php echo $city ?> SSL
                                        Certification
                                        Management</a>
                                    <a class="item_data" href="https://www.organizein.com/qa-testing/"><?php echo $city ?> QA &amp;
                                        Testing</a>
                                    <a class="item_data" href="https://www.organizein.com/migration-services/"><?php echo $city ?> Migration
                                        Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="footerBottom_part">
        <div class="Warper___header px-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 max____width__ col-md-12 col-xl-12 col-lg-12 col-xxl-12 mx-auto">
                        <div class="row">
                            <div class="col-12 col-md-4 left____site___footer___btn col-lg-4 col-xl-4 mx-auto">
                                <button data-bs-toggle="modal" data-bs-target="#exampleModal"><img style="border-radius: 100%; width:25px; height:25px" src="https://countryflagsapi.com/png/<?php echo $country_name ?>" alt="" class="img-fluid" /> <?php echo $country_name ?> <i class="fas fa-chevron-right"></i></button>
                            </div>

                            <div class="col-12 col-md-8 right____site___footer___btn col-lg-8 col-xl-8 mx-auto">
                                <P>
                                    © Copyright 2021 Organizein.com <span>All rights reserved.</span>Organizein
                                    Internet
                                    Marketing Solutions PVT. LTD., All rights reserved. Various trademarks held by
                                    their
                                    respective owners. Organizein.com, United States, India, Singapore, Europe,
                                    Australia.
                                </P>

                                <ul>
                                    <li>
                                        <a href="#">Legal</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Terms of Services</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Sitemap</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Privacy Information</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Responsible disclosure</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Trust</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Contact Cookie preferences</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-------------------------- footer section end  -------------------->



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 720px; ">
            <div class="modal-content" style="border-radius: 15px;">
                <div class="modal-body" style="padding: 16px 10px 30px 60px;">
                    <div class="close_btn" data-bs-dismiss="modal">x</div>
                    <div>
                        <div class="modelSelectRegion">Select Your Region</div>
                        <p class="modelSelectRegionpara">Select a region to show relevant information. <br>This may
                            change the language.</p>
                    </div>
                    <div class="country_box">
                        <a href="https://www.organizein.com/au/" class="country_div">
                            <div class="country_logo" style="background-image: url(https://www.cm.com/images/flags/flag-AU.svg);">
                            </div>
                            <div class="country_name">
                                Austrailia
                            </div>
                        </a>
                        <a href="https://www.organizein.com/br/" class="country_div">
                            <div class="country_logo" style="background-image: url(https://www.cm.com/images/flags/flag-BR.svg);">
                            </div>
                            <div class="country_name">
                                Brazil
                            </div>
                        </a>
                        <a href="https://www.organizein.com/ca/" class="country_div">
                            <div class="country_logo" style="background-image: url(https://www.cm.com/images/flags/flag-CA.svg);">
                            </div>
                            <div class="country_name">
                                Canada
                            </div>
                        </a>
                        <a href="https://www.organizein.com/de/" class="country_div">
                            <div class="country_logo" style="background-image: url(https://www.cm.com/images/flags/flag-DK.svg);">
                            </div>
                            <div class="country_name">
                                Denmark
                            </div>
                        </a>
                        <a href="https://www.organizein.com/db/" class="country_div">
                            <div class="country_logo" style="background-image: url(https://www.cm.com/images/flags/flag-AE.svg);">
                            </div>
                            <div class="country_name">
                                Dubai
                            </div>
                        </a>
                        <a href="https://www.organizein.com/eg/" class="country_div">
                            <div class="country_logo" style="background-image: url(https://www.cm.com/images/flags/flag-EG.svg);">
                            </div>
                            <div class="country_name">
                                Egypt
                            </div>
                        </a>
                        <a href="https://www.organizein.com/fr/" class="country_div">
                            <div class="country_logo" style="background-image: url(https://www.cm.com/images/flags/flag-FR.svg);">
                            </div>
                            <div class="country_name">
                                France
                            </div>
                        </a>
                        <a href="https://www.organizein.com/ge/" class="country_div">
                            <div class="country_logo" style="background-image: url(https://www.cm.com/images/flags/flag-DE.svg);">
                            </div>
                            <div class="country_name">
                                Germany
                            </div>
                        </a>
                        <a href="https://www.organizein.com/hk/" class="country_div">
                            <div class="country_logo" style="background-image: url(https://www.cm.com/images/flags/flag-HK.svg);">
                            </div>
                            <div class="country_name">
                                Hong Kong<span class="country_lang">(Chinese)</span>
                            </div>
                        </a>
                        <a href="https://www.organizein.com/in/" class="country_div">
                            <div class="country_logo" style="background-image: url(https://www.cm.com/images/flags/flag-IN.svg);">
                            </div>
                            <div class="country_name">
                                india <span class="country_lang">(English)</span>
                            </div>
                        </a>
                        <a href="https://www.organizein.com/id/" class="country_div">
                            <div class="country_logo" style="background-image: url(https://www.cm.com/images/flags/flag-ID.svg);">
                            </div>
                            <div class="country_name">
                                indonesia
                            </div>
                        </a>
                        <a href="https://www.organizein.com/it/" class="country_div">
                            <div class="country_logo" style="background-image: url(https://www.cm.com/images/flags/flag-IT.svg);">
                            </div>
                            <div class="country_name">
                                italy
                            </div>
                        </a>
                        <a href="https://www.organizein.com/is/" class="country_div">
                            <div class="country_logo" style="background-image: url(https://www.cm.com/images/flags/flag-IL.svg);">
                            </div>
                            <div class="country_name">
                                israel
                            </div>
                        </a>
                        <a href="https://www.organizein.com/ke/" class="country_div">
                            <div class="country_logo" style="background-image: url(https://www.cm.com/images/flags/flag-KE.svg);">
                            </div>
                            <div class="country_name">
                                kenya<span class="country_lang">(English)</span>
                            </div>
                        </a>
                        <a href="https://www.organizein.com/ku/" class="country_div">
                            <div class="country_logo" style="background-image: url(https://www.cm.com/images/flags/flag-KW.svg);">
                            </div>
                            <div class="country_name">
                                Kuwait<span class="country_lang">(English)</span>
                            </div>
                        </a>
                        <a href="https://www.organizein.com/ma/" class="country_div">
                            <div class="country_logo" style="background-image: url(https://www.cm.com/images/flags/flag-MO.svg);">
                            </div>
                            <div class="country_name">
                                macao<span class="country_lang">(English)</span>
                            </div>
                        </a>
                        <a href="https://www.organizein.com/nl/" class="country_div">
                            <div class="country_logo" style="background-image: url(https://www.cm.com/images/flags/flag-NL.svg);">
                            </div>
                            <div class="country_name">
                                nederland
                            </div>
                        </a>
                        <a href="https://www.organizein.com/ne/" class="country_div">
                            <div class="country_logo" style="background-image: url(https://www.cm.com/images/flags/flag-NZ.svg);">
                            </div>
                            <div class="country_name">
                                newzeland
                            </div>
                        </a>
                        <a href="https://www.organizein.com/no/" class="country_div">
                            <div class="country_logo" style="background-image: url(https://www.cm.com/images/flags/flag-ES.svg);">
                            </div>
                            <div class="country_name">
                                norway
                            </div>
                        </a>
                        <a href="https://www.organizein.com/om/" class="country_div">
                            <div class="country_logo" style="background-image: url(https://www.cm.com/images/flags/flag-OM.svg);">
                            </div>
                            <div class="country_name">
                                oman
                            </div>
                        </a>
                        <a href="https://www.organizein.com/qa/" class="country_div">
                            <div class="country_logo" style="background-image: url(https://www.cm.com/images/flags/flag-QA.svg);">
                            </div>
                            <div class="country_name">
                                Qatar
                            </div>
                        </a>
                        <a href="https://www.organizein.com/ru/" class="country_div">
                            <div class="country_logo" style="background-image: url(https://www.cm.com/images/flags/flag-RU.svg);">
                            </div>
                            <div class="country_name">
                                russia<span class="country_lang">(English)</span>
                            </div>
                        </a>
                        <a href="https://www.organizein.com/sg/" class="country_div">
                            <div class="country_logo" style="background-image: url(https://www.cm.com/images/flags/flag-SG.svg);">
                            </div>
                            <div class="country_name">
                                singapore<span class="country_lang">(English)</span>
                            </div>
                        </a>
                        <a href="https://www.organizein.com/so/" class="country_div">
                            <div class="country_logo" style="background-image: url(https://www.cm.com/images/flags/flag-ZA.svg);">
                            </div>
                            <div class="country_name">
                                south Africa<span class="country_lang">(English)</span>
                            </div>
                        </a>
                        <a href="https://www.organizein.com/sp/" class="country_div">
                            <div class="country_logo" style="background-image: url(https://www.cm.com/images/flags/flag-ES.svg);">
                            </div>
                            <div class="country_name">
                                spain
                            </div>
                        </a>
                        <a href="https://www.organizein.com/sw/" class="country_div">
                            <div class="country_logo" style="background-image: url(https://www.cm.com/images/flags/flag-SE.svg);">
                            </div>
                            <div class="country_name">
                                sweden
                            </div>
                        </a>
                        <a href="https://www.organizein.com/swi/" class="country_div">
                            <div class="country_logo" style="background-image: url(https://www.cm.com/images/flags/flag-CH.svg);">
                            </div>
                            <div class="country_name">
                                switzerland
                            </div>
                        </a>
                        <a href="https://www.organizein.com/th/" class="country_div">
                            <div class="country_logo" style="background-image: url(https://www.cm.com/images/flags/flag-TH.svg);">
                            </div>
                            <div class="country_name">
                                ThaiLand
                            </div>
                        </a>
                        <a href="https://www.organizein.com/tu/" class="country_div">
                            <div class="country_logo" style="background-image: url(https://www.cm.com/images/flags/flag-TR.svg);">
                            </div>
                            <div class="country_name">
                                Turkey
                            </div>
                        </a>
                        <a href="https://www.organizein.com/uk/" class="country_div">
                            <div class="country_logo" style="background-image: url(https://www.cm.com/images/flags/flag-GB.svg);">
                            </div>
                            <div class="country_name">
                                united kingdom
                            </div>
                        </a>
                        <a href="https://www.organizein.com/us/" class="country_div">
                            <div class="country_logo" style="background-image: url(https://www.cm.com/images/flags/flag-US.svg);">
                            </div>
                            <div class="country_name">
                                united state
                            </div>
                        </a>
                        <a href="#" class="country_div global_div">
                            <div class="country_logo" style="background-image: url(https://www.cm.com/images/icons/language.svg);">
                            </div>
                            <div class="country_name">
                                Global
                            </div>
                        </a>
                    </div>
                </div>
                <!-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div> -->
            </div>
        </div>
    </div>


























    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!---------------------- jQuery link  --------------------->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script language="javascript" type="text/javascript" src="jquery-1.8.2.js"></script>

    <script>
        // jQuery navbar 

        $(document).ready(function() {
            $('#icon').click(function() {
                $('ul').toggleClass('show');
            })
        })


        // sticky script 

        window.addEventListener('scroll', function() {

            let nav___sit = document.querySelector('.nav___sit');
            let logo___p = document.querySelector('.logo___p');

            if (window.pageYOffset >= 50) {
                nav___sit.classList.add('sticky____');
                logo___p.classList.add('sticky____logo');
            } else {
                nav___sit.classList.remove('sticky____');
                logo___p.classList.remove('sticky____logo');
            }
        })

        // video poopup 

        function toggle() {
            var video___poopup = document.querySelector('.video___poopup');
            video___poopup.classList.toggle('active');
            var iframe = document.querySelector('iframe');
            iframe.pause();
            iframe.currentTime = 0;



        }


        function toggle1() {
            var video___poopup1 = document.querySelector('.video___poopup1');
            video___poopup1.classList.toggle('active1');
            var iframe1 = document.querySelector('iframe');
            iframe1.pause();
            iframe1.currentTime = 0;
        }

        function toggle2() {
            let video___poopup2 = document.querySelector('.video___poopup2');
            var iframe2 = document.querySelector('iframe');
            video___poopup2.classList.toggle('active2');
            iframe2.pause();
            iframe2.currentTime = 0;
        }

        function toggle3() {
            let video___poopup3 = document.querySelector('.video___poopup3');
            var iframe3 = document.querySelector('iframe');
            video___poopup3.classList.toggle('active3');
            iframe3.pause();
            iframe3.currentTime = 0;
        }

        function toggle4() {
            let video___poopup4 = document.querySelector('.video___poopup4');
            var iframe4 = document.querySelector('iframe');
            video___poopup4.classList.toggle('active4');
            iframe4.pause();
            iframe4.currentTime = 0;
        }

        function toggle5() {
            let video___poopup5 = document.querySelector('.video___poopup5');
            var iframe5 = document.querySelector('iframe');
            video___poopup5.classList.toggle('active5');
            iframe5.pause();
            iframe5.currentTime = 0;
        }

        function toggle6() {
            let video___poopup6 = document.querySelector('.video___poopup6');
            var iframe7 = document.querySelector('iframe');
            video___poopup6.classList.toggle('active6');
            iframe7.pause();
            iframe7.currentTime = 0;
        }

        function toggle7() {
            let video___poopup7 = document.querySelector('.video___poopup7');
            var iframe7 = document.querySelector('iframe');
            video___poopup7.classList.toggle('active7');
            iframe7.pause();
            iframe7.currentTime = 0;
        }
    </script>


    <script language="javascript" type="text/javascript">
        $(function() {
            $('.close____').click(function() {
                $('#video').attr('src', $('#video').attr('src'));
            });
        });

        $(function() {
            $('.close____1').click(function() {
                $('.secound__iframe').attr('src', $('.secound__iframe').attr('src'));
            });
        });

        $(function() {
            $('.close____2').click(function() {
                $('.Third___iframe').attr('src', $('.Third___iframe').attr('src'));
            });
        });

        $(function() {
            $('.close____3').click(function() {
                $('.Forth___iframe').attr('src', $('.Forth___iframe').attr('src'));
            });
        });

        $(function() {
            $('.close____4').click(function() {
                $('.fifth__iframe').attr('src', $('.fifth__iframe').attr('src'));
            });
        });

        $(function() {
            $('.close____5').click(function() {
                $('.sixth__iframe').attr('src', $('.sixth__iframe').attr('src'));
            });
        });

        $(function() {
            $('.close____6').click(function() {
                $('.seventh___iframe').attr('src', $('.seventh___iframe').attr('src'));
            });
        });

        $(function() {
            $('.close____7').click(function() {
                $('.eight__iframe').attr('src', $('.eight__iframe').attr('src'));
            });
        });

        $(function() {
            $('.mega_trigger_1').mouseover(function() {
                $('.mega_trigger_1_container').addClass("mega_toggle");
            });
        });

        $(function() {
            $('.mega_trigger_1').mouseleave(function() {
                $('.mega_trigger_1_container').removeClass("mega_toggle");
            });
        });
        $(function() {
            $('.mega_trigger_2').mouseover(function() {
                $('.mega_trigger_2_container').addClass("mega_toggle");
            });
        });

        $(function() {
            $('.mega_trigger_2').mouseleave(function() {
                $('.mega_trigger_2_container').removeClass("mega_toggle");
            });
        });

        $(function() {
            $('.mega_trigger_3').mouseover(function() {
                $('.mega_trigger_3_container').addClass("mega_toggle");
            });
        });

        $(function() {
            $('.mega_trigger_3').mouseleave(function() {
                $('.mega_trigger_3_container').removeClass("mega_toggle");
            });
        });

        $(function() {
            $('.mega_trigger_4').mouseover(function() {
                $('.mega_trigger_4_container').addClass("mega_toggle");
            });
        });

        $(function() {
            $('.mega_trigger_4').mouseleave(function() {
                $('.mega_trigger_4_container').removeClass("mega_toggle");
            });
        });

        $(function() {
            $('.mega_trigger_5').mouseover(function() {
                $('.mega_trigger_5_container').addClass("mega_toggle");
            });
        });

        $(function() {
            $('.mega_trigger_5').mouseleave(function() {
                $('.mega_trigger_5_container').removeClass("mega_toggle");
            });
        });

        $(function() {
            $('.mega_trigger_6').mouseover(function() {
                $('.mega_trigger_6_container').addClass("mega_toggle");
            });
        });

        $(function() {
            $('.mega_trigger_6').mouseleave(function() {
                $('.mega_trigger_6_container').removeClass("mega_toggle");
            });
        });

        $(function() {
            $('.mega_trigger_7').mouseover(function() {
                $('.mega_trigger_7_container').addClass("mega_toggle");
            });
        });

        $(function() {
            $('.mega_trigger_7').mouseleave(function() {
                $('.mega_trigger_7_container').removeClass("mega_toggle");
            });
        });

        $(function() {
            $('.mega_trigger_1').click(function() {
                $('.mega_trigger_1_container').toggleClass("mega_toggle_increase_height");
                $('.mega_trigger_2_container').removeClass("mega_toggle_increase_height");
                $('.mega_trigger_3_container').removeClass("mega_toggle_increase_height");
                $('.mega_trigger_4_container').removeClass("mega_toggle_increase_height");
                $('.mega_trigger_5_container').removeClass("mega_toggle_increase_height");
                $('.mega_trigger_6_container').removeClass("mega_toggle_increase_height");
                $('.mega_trigger_7_container').removeClass("mega_toggle_increase_height");
            });
        });
        $(function() {
            $('.mega_trigger_2').click(function() {
                $('.mega_trigger_2_container').toggleClass("mega_toggle_increase_height");
                $('.mega_trigger_1_container').removeClass("mega_toggle_increase_height");
                $('.mega_trigger_3_container').removeClass("mega_toggle_increase_height");
                $('.mega_trigger_4_container').removeClass("mega_toggle_increase_height");
                $('.mega_trigger_5_container').removeClass("mega_toggle_increase_height");
                $('.mega_trigger_6_container').removeClass("mega_toggle_increase_height");
                $('.mega_trigger_7_container').removeClass("mega_toggle_increase_height");
            });
        });
        $(function() {
            $('.mega_trigger_3').click(function() {
                $('.mega_trigger_3_container').toggleClass("mega_toggle_increase_height");
                $('.mega_trigger_1_container').removeClass("mega_toggle_increase_height");
                $('.mega_trigger_2_container').removeClass("mega_toggle_increase_height");
                $('.mega_trigger_4_container').removeClass("mega_toggle_increase_height");
                $('.mega_trigger_5_container').removeClass("mega_toggle_increase_height");
                $('.mega_trigger_6_container').removeClass("mega_toggle_increase_height");
                $('.mega_trigger_7_container').removeClass("mega_toggle_increase_height");
            });
        });
        $(function() {
            $('.mega_trigger_4').click(function() {
                $('.mega_trigger_4_container').toggleClass("mega_toggle_increase_height");
                $('.mega_trigger_1_container').removeClass("mega_toggle_increase_height");
                $('.mega_trigger_2_container').removeClass("mega_toggle_increase_height");
                $('.mega_trigger_3_container').removeClass("mega_toggle_increase_height");
                $('.mega_trigger_5_container').removeClass("mega_toggle_increase_height");
                $('.mega_trigger_6_container').removeClass("mega_toggle_increase_height");
                $('.mega_trigger_7_container').removeClass("mega_toggle_increase_height");
            });
        });
        $(function() {
            $('.mega_trigger_5').click(function() {
                $('.mega_trigger_5_container').toggleClass("mega_toggle_increase_height");
                $('.mega_trigger_1_container').removeClass("mega_toggle_increase_height");
                $('.mega_trigger_2_container').removeClass("mega_toggle_increase_height");
                $('.mega_trigger_3_container').removeClass("mega_toggle_increase_height");
                $('.mega_trigger_4_container').removeClass("mega_toggle_increase_height");
                $('.mega_trigger_6_container').removeClass("mega_toggle_increase_height");
                $('.mega_trigger_7_container').removeClass("mega_toggle_increase_height");
            });
        });
        $(function() {
            $('.mega_trigger_6').click(function() {
                $('.mega_trigger_6_container').toggleClass("mega_toggle_increase_height");
                $('.mega_trigger_1_container').removeClass("mega_toggle_increase_height");
                $('.mega_trigger_2_container').removeClass("mega_toggle_increase_height");
                $('.mega_trigger_3_container').removeClass("mega_toggle_increase_height");
                $('.mega_trigger_4_container').removeClass("mega_toggle_increase_height");
                $('.mega_trigger_5_container').removeClass("mega_toggle_increase_height");
                $('.mega_trigger_7_container').removeClass("mega_toggle_increase_height");
            });
        });
        $(function() {
            $('.mega_trigger_7').click(function() {
                $('.mega_trigger_7_container').toggleClass("mega_toggle_increase_height");
                $('.mega_trigger_1_container').removeClass("mega_toggle_increase_height");
                $('.mega_trigger_2_container').removeClass("mega_toggle_increase_height");
                $('.mega_trigger_3_container').removeClass("mega_toggle_increase_height");
                $('.mega_trigger_4_container').removeClass("mega_toggle_increase_height");
                $('.mega_trigger_5_container').removeClass("mega_toggle_increase_height");
                $('.mega_trigger_6_container').removeClass("mega_toggle_increase_height");
            });
        });





        $(function() {
            document.addEventListener("scroll", () => {
                let height = $("header").css("height")
                if (parseInt(height) < 70) {
                    height = "70px"
                }
                $('.mega_menu_container').css("top", height)
            })
        })

        $(document).ready(function() {
            let height = $("header").css("height")
            if (parseInt(height) < 70) {
                height = "70px"
            }
            $('.mega_menu_container').css("top", height)
        })

        // $('form').submit(function(e) {
        //     e.preventDefault();
        //     let form = $(this);
        //     let data = {};
        //     $(this).find('input,select,textarea').each(function() {
        //         data[$(this).attr('name')] = $(this).val();
        //     });

        //     // if (!data['g-recaptcha-response']) {
        //     //     alert('Please fill captcha to continue');
        //     //     return;
        //     // }
        //     $('.loader').removeClass('d-none');
        //     $.ajax({
        //         url: $(this).attr('action'),
        //         method: 'POST',
        //         data: data,
        //         success: function(data) {
        //             $('.loader').addClass('d-none');
        //             // form.trigger('reset');
        //             if (data == 'success')
        //                 alert('Data Saved');
        //             else
        //                 alert('Cannot Save Data');
        //             document.location.reload();
        //         },
        //         error: function(error) {
        //             // form.trigger('reset');
        //             alert('Cannot Save Data');
        //             $('.loader').addClass('d-none');
        //             document.location.reload();
        //         }
        //     });
        // });
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.owl-carousel2').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                items: 1,
                dots: false,
                autoplay: true,
                autoplayTimeout: 3000,
                navText: ['<i class="fa fa-chevron-right" id="marketingbanner_right"></i>', `<i class="fa fa-chevron-left" id="marketingbanner_left"></i>`]
            })

        })

        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                items: 1,
                dots: false,
                autoplay: true,
                autoplayTimeout: 2000,
            })
        })

        const RSS_URL = `https://blog.organizein.com/feed/`;

        fetch(RSS_URL, {
                method: 'GET', // *GET, POST, PUT, DELETE, etc.
                mode: 'cors',
            })
            .then(response => response.text())
            .then(str => new window.DOMParser().parseFromString(str, "text/xml"))
            .then(data => console.log(data))


        $(document).ready(function() {
            const topp = $('#contactUsForm').offset()
            // $('.contactus_btn').click(function() {
            //     $('html, body').animate({
            //         scrollTop: ($("#contactUsForm").offset().top - 100)
            //     }, 10);
            // })
        })
    </script>
    <script>
        var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?33153';
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = url;
        var options = {
            "enabled": true,
            "chatButtonSetting": {
                "backgroundColor": "#4dc247",
                "ctaText": "Message Us",
                "borderRadius": "25",
                "marginLeft": "0",
                "marginBottom": "50",
                "marginRight": "50",
                "position": "right"
            },
            "brandSetting": {
                "brandName": "WATI",
                "brandSubTitle": "Typically replies within a day",
                "brandImg": "https://organizein.com/wp-content/uploads/2021/07/customer-success-stories-1.png",
                "welcomeText": "Hi there!\nHow can I help you?",
                "messageText": "Hello, I have a question about {{page_link}}",
                "backgroundColor": "#0eb445",
                "ctaText": "Start Chat",
                "borderRadius": "25",
                "autoShow": false,
                "phoneNumber": "13153051799"
            }
        };
        s.onload = function() {
            CreateWhatsappChatWidget(options);
        };
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
    </script>
    <?php if ($header_code["footer_code"] != "") :
    ?>
        <?= $header_code["footer_code"] ?>
    <?php endif ?>
</body>

</html>
