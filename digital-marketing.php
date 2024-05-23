<?php
$page = 'services';
$page1 = 'digital_marketing';
include './components/head.php' ?>
<link rel="stylesheet" href="./src/swiper.css">
<title>Digital Marketing - Indomitech</title>
</head>

<body>
    <?php include './components/loader.php' ?>

    <?php include './components/fixed_item.php' ?>
    <!-- nav -->
    <?php include './components/nav.php' ?>


    <div id="mobile-app-development" class="service-hero hero">
        <h1 class="service-hero-heading" data-aos="fade-up" data-aos-duration="1500">Digital <span
                class="text-light">Marketing</span></h1>
    </div>

    <section class="row-2">
        <div class="left img">
            <img src="./img/services/digital-marketing-img1.svg" alt="">
        </div>
        <div class="right">
            <div class="content">
                <h3 class="heading">Data-Driven Digital Marketing to Amplify Your Online Presence and Drive Results</h3>
                <p>At <a href="https://indomitechgroup.com/" class="seo">Indomitech Group </a>, our <a href="#!"
                        class="seo">graphic design</a> services are tailored to bring your brand's vision to life. We
                    combine creativity, strategic thinking, and attention to detail to deliver visually compelling
                    graphics that communicate your message effectively. From <a href="#!" class="seo">logos and
                        marketing</a> materials to comprehensive branding packages, our designs are crafted to captivate
                    and engage your audience.</p>

                <div class="key_features">

                    <div class="feature" data-aos="fade-down-right" data-aos-delay="300" data-aos-duration="1500">
                        <div class="icon">
                            <img src="./img/icons/seo.png" alt="">
                        </div>
                        <div class="content-feature">
                            <h4 class="heading">SEO Optimization</h4>
                            <p>Our experts optimize your website for search engines, improving your visibility and
                                organic traffic.</p>
                        </div>
                    </div>

                    <div class="feature" data-aos="fade-down-right" data-aos-delay="600" data-aos-duration="1500">
                        <div class="icon">
                            <img src="./img/icons/ppc.png" alt="">
                        </div>
                        <div class="content-feature">
                            <h4 class="heading">PPC Campaigns</h4>
                            <p>We create and manage effective pay-per-click campaigns to drive targeted traffic and
                                increase conversions.</p>
                        </div>
                    </div>

                    <div class="feature" data-aos="fade-down-right" data-aos-delay="900" data-aos-duration="1500">
                        <div class="icon">
                            <img src="./img/icons/social.png" alt="">
                        </div>
                        <div class="content-feature">
                            <h4 class="heading">Social Media Marketing</h4>
                            <p>Our team designs and implements social media strategies to engage your audience and grow
                                your brand online.</p>
                        </div>
                    </div>

                    <div class="feature" data-aos="fade-down-right" data-aos-delay="1200" data-aos-duration="1500">
                        <div class="icon">
                            <img src="./img/icons/content.png" alt="">
                        </div>
                        <div class="content-feature">
                            <h4 class="heading">Content Marketing</h4>
                            <p>We produce high-quality content that resonates with your audience and supports your
                                marketing goals.</p>
                        </div>
                    </div>







                </div>
            </div>
        </div>
    </section>

    <section class="development-process">
        <div class="section_heading">Our Development Process</div>

        <div class="process-container">
            <div class="process p-1" data-aos="fade-out" data-aos-delay="0" data-aos-duration="1500">
                <div class="icon">
                    1
                </div>
                <div class="content-feature">
                    <h4 class="heading">Discovery & Strategy</h4>
                    <p>We start by understanding your business objectives, target audience, and current digital
                        footprint to develop a customized marketing strategy.</p>
                </div>
            </div>

            <div class="process p-2" data-aos="fade-out" data-aos-delay="500" data-aos-duration="1500">
                <div class="icon">
                    2
                </div>
                <div class="content-feature">
                    <h4 class="heading">Campaign Planning</h4>
                    <p>Our team plans comprehensive campaigns across various digital channels, ensuring cohesive
                        messaging and strategy alignment.</p>
                </div>
            </div>

            <div class="process p-3" data-aos="fade-out" data-aos-delay="1000" data-aos-duration="1500">
                <div class="icon">
                    3
                </div>
                <div class="content-feature">
                    <h4 class="heading">Execution & Optimization</h4>
                    <p>We execute the campaigns, monitor their performance, and make data-driven optimizations to
                        enhance effectiveness and achieve the best results.</p>
                </div>
            </div>

            <div class="process p-4" data-aos="fade-out" data-aos-delay="1500" data-aos-duration="1500">
                <div class="icon">
                    4
                </div>
                <div class="content-feature">
                    <h4 class="heading">Reporting & Analysis</h4>
                    <p>We provide comprehensive reports and analysis, highlighting key performance indicators and
                        insights to inform future marketing strategies.</p>
                </div>




            </div>


    </section>

    <!--<section id="works">-->
    <!--    <div class="section_heading">Our Works</div>-->
    <!--    <div class="primary_heading"><span class="text-light">Explore Our</span> Works</div>-->

    <!--    <div class="work-slider">-->
    <!--        <div class="swiper work-swiper">-->
    <!--            <div class="swiper-wrapper">-->
    <!--                <div class="swiper-slide">-->
    <!--                    <img src="./img/projects/01.png" alt="">-->
    <!--                </div>-->
    <!--                <div class="swiper-slide">-->
    <!--                    <img src="./img/projects/02.png" alt="">-->
    <!--                </div>-->
    <!--                <div class="swiper-slide">-->
    <!--                    <img src="./img/projects/06.png" alt="">-->
    <!--                </div>-->
    <!--                <div class="swiper-slide">-->
    <!--                    <img src="./img/projects/01.png" alt="">-->
    <!--                </div>-->
    <!--                <div class="swiper-slide">-->
    <!--                    <img src="./img/projects/02.png" alt="">-->
    <!--                </div>-->
    <!--                <div class="swiper-slide">-->
    <!--                    <img src="./img/projects/06.png" alt="">-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->

    <!--</section>-->


    <?php include './components/contact_us_service.php' ?>

    <?php include './components/footer.php' ?>
    <script src="./src/swiper.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="./src/multi-animated-counter.js"></script>
    <?php include './components/scripts.php' ?>
    <script>
        const swiper = new Swiper('.swiper', {
            speed: 6000,
            spaceBetween: 20,
            slidesPerView: "auto",
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
        });

    </script>
</body>

</html>